<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = [
        'type'
    ];
    public function AboutAgency(){
        return $this->hasOne('App\AboutAgency','agency_id');
    }
    public function ClientType(){
        return $this->hasOne('App\ClientType','agency_id');
    }
}
