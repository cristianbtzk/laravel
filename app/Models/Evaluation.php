<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['rating', 'comment', 'author_id', 'subject_id', 'service_id'];

    public function author() {
      return $this->belongsTo('App\Models\User', 'author_id');   
    }

    public function subject() {
      return $this->belongsTo('App\Models\User', 'subject_id');   
    }

    public function service() {
      return $this->belongsTo('App\Models\Service');   
    }
}
