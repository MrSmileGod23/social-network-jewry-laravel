<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articl extends Model
{
    protected $table = 'articles';
    use HasFactory;

    public function article_theme() {
        return $this->belongsTo(Article_theme::class, 'theme_id');
    }

    protected $fillable =['theme_id','name','info'];
}
