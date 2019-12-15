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
    protected $fillable = [
        'role_id',
        'fullname',
        'username',
        'email',
        'email_verified_at',
        'password',
        'gender',
        'phone',
        'date_of_birth',
        'country',
        'state',
        'address',
        'bio',
        'height',
        'weight',
        'rating',
        'is_blocked',
        'is_verified',
        'path',
        'cover_path',
        'last_seen',
        'not_bot',
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

    protected $dates = [
        'created_at',
        'updated_at',
        'last_seen'
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function attachment(){
        return $this->hasMany('App\UserAttachment');
    }

    public function notification(){
        return $this->hasMany('App\Notification');
    }

    public function isOnline(){
        $interval = 4;
        $user = User::find($this->id);
        $calc = Carbon::now()->subMinutes($interval)->toDateTimeString();
        // $calc = Carbon::now() - $user->last_seen;
        if($user->last_seen->gt($calc))
            return true;
        else{
            return false;
    }
}
