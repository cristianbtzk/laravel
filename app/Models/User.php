<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['is_active', 'name', 'email', 'password', 'cpf', 'cnpj'];

    public function address() {
      return $this->hasOne('App\Models\Address'); 
    }
      
    public function services() {
      return $this->hasMany('App\Models\Service');
    }

    public function evaluations() {
      return $this->hasMany('App\Models\Evaluation');
    }

    public function messages() {
      return $this->hasMany('App\Models\Message');
    }

    public function roles() {
      return $this->belongsToMany('App\Models\Role', 'user__roles');
    }

    public function cities() {
      return $this->belongsToMany('App\Models\City', 'user__cities');
    }
}
