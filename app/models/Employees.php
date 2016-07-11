<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'salary'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }

}
