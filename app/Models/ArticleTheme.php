<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTheme extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function Article()
    {

        return $this->hasMany(Article::class);
    }

}
