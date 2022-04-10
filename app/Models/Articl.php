<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articl extends Model
{
    protected $table = 'Articles';
    use HasFactory;

    public function Article_theme()
    {
        return $this->belongsTo(Article_theme::class);
    }

    protected $fillable =['theme_id','name','info'];
}
