<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    public function user()
    {
        return $this->hasMany('App\models\User');
    }
}
