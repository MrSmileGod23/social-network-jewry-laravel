<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTheme;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::paginate(4);
        $themes = ArticleTheme::get();

        return view('articles',[
            'article' => $article,
            'themes' => $themes
        ]);
    }

    public function show($id)
    {
        $article = Article::where('id',$id)->first();
        $themes = ArticleTheme::get();

        return view('show-article',[
            'article' => $article,
            'themes' => $themes
        ]);
    }

    public function showThemes($theme_id)
    {
        $article = Article::where('theme_id',$theme_id)->paginate(4);
        $themes = ArticleTheme::get();

        return view('articles',[
            'article' => $article,
            'themes' => $themes
        ]);
    }
    public function new()
    {
        $themes = ArticleTheme::get();

        return view('createArticle',[
            'themes' => $themes
        ]);
    }

    public function create(Request $request)
    {
        $current_user = $request->user();
        Article::insert(array(
            'theme_id'  =>$request->theme_id,
            'name' =>$request->name,
            'info'   =>$request->info
        ));

        return redirect()->action([UserController::class,'show'], ['id' => $current_user ]);
    }
}
