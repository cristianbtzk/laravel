<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'user_id', 'house_number', 'street', 'postal_code', 'district']; 

    public function user() {
        return $this->belongsTo('App\Models\User');   
    }

    public function city() {
      return $this->belongsTo('App\Models\City');   
    }
}
