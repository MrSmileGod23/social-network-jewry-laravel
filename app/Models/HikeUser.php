<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HikeUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'hike_id',
        'user_id',
        'role'
    ];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }
    public function hike() {

        return $this->belongsTo(Hike::class, 'hike_id');
    }


}
