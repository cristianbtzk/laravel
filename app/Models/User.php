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
}
