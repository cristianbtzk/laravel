<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'min_date', 'max_date', 'user_id', 'service_status_id', 'category_id']; 

    public function user() {
      return $this->belongsTo('App\Models\User');   
    }

    public function category() {
      return $this->belongsTo('App\Models\Category');
    }

    public function serviceStatus() {
      return $this->belongsTo('App\Models\ServiceStatus', 'service_status_id');   
    }

    public function messages() {
      return $this->hasMany('App\Models\Message');
    }

    public function evaluations() {
      return $this->hasMany('App\Models\Evaluation');
    }
}
