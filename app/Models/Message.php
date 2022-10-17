<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'text', 'from_id', 'to_id', 'service_id']; 

    public function service() {
      return $this->belongsTo('App\Models\Service');   
    }

    public function from() {
      return $this->belongsTo('App\Models\User', 'from_id');   
    }

    public function to() {
      return $this->belongsTo('App\Models\User', 'tot_id');   
    }
}
