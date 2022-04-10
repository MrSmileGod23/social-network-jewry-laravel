<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_theme extends Model
{
    protected $table = 'Article_themes';
    use HasFactory;

    public function Articl()
    {
        return $this->hasMany(Articl::class);
    }
    protected $fillable =['name'];
}
