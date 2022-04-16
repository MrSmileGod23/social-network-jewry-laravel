<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
    use HasFactory;

    public function hike_type() {
        return $this->belongsTo(hike_type::class, 'type_id');
    }
}
