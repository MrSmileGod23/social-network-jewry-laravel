<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   HikeType extends Model
{
    use HasFactory;


    public function Hike()
    {
        return $this->hasMany(Hike::class);
    }
}
