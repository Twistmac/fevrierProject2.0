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

    /**
    * function getter email
    * @param $value;
    * @return $value;
    */
    public function getEmailAttribute($value)
    {
        if( is_null($value) )
            return "placeholder='aucun(e)'";
        else
            return "value='".$value."'";
    }

    /**
    * function getter name
    * @param $value
    * @return $value;
    */
    public function getNameAttribute($value)
    {
        if( is_null($value) )
            return "placeholder='aucun(e)'";
        else
            return "value=".$value."";
    }

    /**
    * function getter firstname
    * @param $value
    * @return $value;
    */
    public function getFirstnameAttribute($value)
    {
        if( is_null($value) )
            return "placeholder='aucun(e)'";
        else
            return "value='".$value."'";
    }

    /**
    * function getter telephone 
    * @param $value
    * @return $value
    */
    public function getTelephoneAttribute($value)
    {
        if( is_null($value) )
            return "placeholder='aucun(e)'";
        else
            return "value='".$value."'";
    }

    /**
    * function getter urlimage
    * @param $value
    * @return $value;
    */
    public function getUrlimageAttribute($value)
    {
        if( is_null($value) )
            return 'profil.png';
        else
            return $value;
    }
}
