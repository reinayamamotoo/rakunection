<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCareer extends Model
{
    protected $fillable = ['career', 'user_id', 'position', 'start', 'end', 'project_detail'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
