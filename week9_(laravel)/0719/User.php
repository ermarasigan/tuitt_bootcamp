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

    function myRequests(){
        return $this->belongsToMany('App\User', 'friend_requests', 'from', 'to');
    }

    function theirRequests(){
        return $this->belongsToMany('App\User', 'friend_requests', 'to', 'from');
    }

    function pendingRequests(){
        return $this->theirRequests()->wherePivot('status',0)->get();
    }

    function friends(){
        return $this->theirRequests()->wherePivot('status',1)->get()->merge($this->myRequests()->wherePivot('status',1)->get());
    }

    function addFriend(User $user){
        $this->myRequests()->attach($user->id);
    }

    function acceptRequest($id){
        $this->theirRequests()->where('from',$id)->first()->pivot->update([
                'status' => 1,
            ]);
    }

    function declineRequest($id){
        $this->theirRequests()->detach($id);
    }


}
