<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =['theme_id','name','info'];

    public function article_theme() {

        return $this->belongsTo(ArticleTheme::class, 'theme_id');
    }


}
