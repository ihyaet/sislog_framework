<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function laporan(){
        return $this->hasMany('App/Laporan');
    }
    
    protected $fillable = [
        'name', 'email', 'password','admin',
    ];

    // public function authorizeRole(){
    //     if('admin'== 0){
    //        return view('trc.laporan');
    //     }else{
    //         abort(401,'You Have To Login As TRC');
    //     }
    //  }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
