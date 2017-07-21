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
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function sentRequests(){
        return $this->belongsToMany('App\User', 'friends', 'from_user', 'to_user');
    }

    function rcvdRequests(){
        return $this->belongsToMany('App\User', 'friends', 'to_user', 'from_user');
    }

    function pendingRequests(){
        return $this->rcvdRequests()->wherePivot('status',0)->get();
    }

    function friends(){
        return $this->rcvdRequests()->wherePivot('status',1)->get()->merge($this->sentRequests()->wherePivot('status',1)->get());
    }

    function addFriend(User $user){
        $this->sentRequests()->attach($user->id,['status','P']);
    }

    function acceptRequest($id){
        $this->rcvdRequests()->where('from_user',$id)->first()->pivot->update([
                'status' => 1,
            ]);
    }

    function declineRequest($id){
        $this->rcvdRequests()->detach($id);
    }
}
