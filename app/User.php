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
        'name', 'password','register_name', 'email', 'comment', 'club', 'homecountry', 'tyuuto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function careers()
    {
        return $this->hasMany(UserCareer::class);
    }
    
     public function educations()
    {
        return $this->hasOne(UserEducation::class);
    }
    
     static function search($keyword){
        $query = self::query();
        $query->where('name', 'like', "%{$keyword}%");
        return $query->orderBy('created_at', 'asc')->paginate(10);
    }
    
    
    public function favorites()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
    }
    
    public function favorite($userId)
{
    // confirm if already favoriting
    $exist = $this->is_favoriting($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // do nothing if already favoriting
        return false;
    } else {
        // favorite if not favoriting
        $this->favorites()->attach($userId);
        return true;
    }
}

public function unfavorite($userId)
{
    // confirming if already favoriting
    $exist = $this->is_favoriting($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;


    if ($exist && !$its_me) {
        // stop favoriting if favoriting
        $this->favorites()->detach($userId);
        return true;
    } else {
        // do nothing if not favoriting
        return false;
    }
  }
  
  public function is_favoriting($userId) {
    return $this->favorites()->where('favorite_id', $userId)->exists();
    }

public function user_picture(){
    return $this->hasOne(UserPicture::Class);
    }
}