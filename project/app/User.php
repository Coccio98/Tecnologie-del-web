<?php

namespace App;

use http\Env\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname','role', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;

    public static function userUpdate($request){
        return User::where('id', $request->user()->id)
            ->update(['name' => $request->name,
                'surname' => $request->surname,
                'phone' => $request->phone]);
    }

    public static function roleUpdate($request, $id){
        $role = (!empty($request->role) ? 1 : 0);
        return User::where('id', $id)
            ->update(['role' => $role]);
    }
}
