<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPicture extends Model
{
    protected $fillable = ['user_picture', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
