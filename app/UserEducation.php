<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    protected $fillable = ['university' ,'major', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
