<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walls extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function messages()
    {
        return $this->hasMany('App\Messages');
    }

}
