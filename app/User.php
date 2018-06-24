<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function AboutAgency(){
        return $this->hasOne('App\AboutAgency','agency_id');
    }
    public function ClientType(){
        return $this->hasOne('App\ClientType','agency_id');
    }
    public function CompanyInfo(){
        return $this->hasOne('App\CompanyInfo','client_id');
    }
    public function MoreInfo()
    {
        return $this->hasOne('App\MoreInfo','client_id');
    }
    public function ServiceNeeded()
    {
        return $this->hasOne('App\ServiceNeeded','client_id');
    }
}
