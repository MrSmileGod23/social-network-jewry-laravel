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
}
