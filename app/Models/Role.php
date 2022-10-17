<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['description']; 

    public function users() {
      return $this->hasMany('App\Models\User');   
    }

    public function User() {
      return $this->belongsToMany('App\Models\User', 'user__roles');
    }
}
