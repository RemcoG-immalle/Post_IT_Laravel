<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function walls()
    {
        return $this->belongsTo('App\Walls', 'wall_id');
    }
}
