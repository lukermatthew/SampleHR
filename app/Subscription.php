<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function package()
    {
        return $this->belongsTo('App\Package');
    }

}
