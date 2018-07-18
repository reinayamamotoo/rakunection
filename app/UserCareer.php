<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCareer extends Model
{
    protected $fillable = ['career', 'service', 'user_id', 'position', 'start', 'end', 'project_detail'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
     static function search($keyword_career, $keyword_service){
        $query = self::query();
        $query->join('users', 'user_careers.user_id', '=', 'users.id')
        ->where('career', 'like', "%{$keyword_career}%")
        ->where('service', 'like', "%{$keyword_service}%");
    
        return $query->orderBy('user_id', 'desc')->paginate(100);
    }
}
