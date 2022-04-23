<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_theme extends Model
{
    use HasFactory;

    public function Articl()
    {
        return $this->hasMany(Articl::class);
    }
    protected $fillable =['name'];
}
