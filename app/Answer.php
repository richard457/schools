<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string answer
 * @property bool marked
 * @property integer question_id

 */
class Answer extends Model
{
    protected $table ='answers';
    protected $fillable = ['answer','question_id','marked'];
}
