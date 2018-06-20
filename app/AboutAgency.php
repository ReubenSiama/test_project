<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutAgency extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
