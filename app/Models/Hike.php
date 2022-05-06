<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
    use HasFactory;

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

    public function HikeType() {

        return $this->belongsTo(HikeType::class, 'type_id');
    }

    public function city() {

        return $this->belongsTo(City::class, 'city_id');
    }

    public function users() {

        return $this->hasMany(HikeUser::class, 'id');
    }


}
