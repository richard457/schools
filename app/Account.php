<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property mixed name
 * @property mixed user_id
 * @property int parent_id
 * @property mixed value
 * @property mixed text
 */
class Account extends Model
{
    use NodeTrait;
    protected $table='accounts';
    protected $fillable=['name','user_id','value','text'];
}
