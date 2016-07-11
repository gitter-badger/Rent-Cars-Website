<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cars extends Model
{
    use SoftDeletes;
    protected $fillable = ['type', 'picture','model','color','license_number','motor_number','chassis_number','plate_number',
        'user_id','price','condition','expenses','available'];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }
}
