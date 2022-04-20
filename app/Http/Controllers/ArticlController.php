<?php

namespace App\Http\Controllers;

use App\Models\Articl;
use App\Models\Article_theme;
use Illuminate\Http\Request;

class ArticlController extends Controller
{
    public function allData()
    {
        $article = Articl::paginate(4);
        $themes = Article_theme::get();
        return view('articles',[
            'article' => $article,
            'themes' => $themes
        ]);

    }

    public function getArticle($id)
    {
        $article = Articl::where('id',$id)->first();
        $themes = Article_theme::get();
        return view('show-article',[
            'article' => $article,
            'themes' => $themes
        ]);

    }
    public function getArticleTheme($theme_id)
    {
        $article = Articl::where('theme_id',$theme_id)->paginate(4);
        $themes = Article_theme::get();
        return view('articles',[
            'article' => $article,
            'themes' => $themes
        ]);

    }
    public function createArticle()
    {
        $themes = Article_theme::get();
        return view('createArticle',[
            'themes' => $themes
        ]);
    }
    public function newArticle(Request $request)
    {
        $current_user = $request->user();
        Articl::insert(array(
            'theme_id'  =>$request->theme_id,
            'name' =>$request->name,
            'info'   =>$request->info
        ));
        return redirect()->action([UserController::class,'user'], ['id' => $current_user ]);

    }
}
