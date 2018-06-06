<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultQuestion extends Model
{
   protected $table = 'default_questions';
   protected $fillable=['question','lang'];
}
