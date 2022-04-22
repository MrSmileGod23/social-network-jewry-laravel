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

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function users() {
        return $this->hasMany(Hike_user::class, 'id');
    }

    protected $fillable = [
        'id',
        'type_id',
        'city_id',
        'name',
        'difficulty',
        'startDate',
        'endDate',
        'info',
        'food',
        'equipment',
        'route',
        'mileage',
        'img'
    ];
}
