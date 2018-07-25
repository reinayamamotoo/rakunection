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
    
    
     static function search($keyword_career, $keyword_service, $keyword_tyuuto, $keyword_shinsotsu, $keyword_mba, $keyword_sankyuu, $keyword_start, $keyword_end, $keyword_university){
       
       $query = self::query();
       
       if($keyword_start != null && $keyword_end != null){
       $query->join('users', 'user_careers.user_id', '=', 'users.id')
       ->where('career', 'like', "%{$keyword_career}%")
       ->where('service', 'like', "%{$keyword_service}%")
       ->where('tyuuto', 'like', "%{$keyword_shinsotsu}%")
       ->where('tyuuto', 'like', "%{$keyword_tyuuto}%")
       ->where('comment', 'like', "%{$keyword_mba}%")
       ->where('comment', 'like', "%{$keyword_sankyuu}%")
       ->whereBetween('start_career', [$keyword_start, $keyword_end]);
        
        }elseif($keyword_start != null && $keyword_end == null){
        $query->join('users', 'user_careers.user_id', '=', 'users.id')
       ->where('career', 'like', "%{$keyword_career}%")
       ->where('service', 'like', "%{$keyword_service}%")
       ->where('tyuuto', 'like', "%{$keyword_shinsotsu}%")
       ->where('tyuuto', 'like', "%{$keyword_tyuuto}%")
       ->where('comment', 'like', "%{$keyword_mba}%")
       ->where('comment', 'like', "%{$keyword_sankyuu}%")
       ->whereBetween('start_career', [$keyword_start, 2018]);
        
        }elseif($keyword_start == null && $keyword_end != null){
        $query->join('users', 'user_careers.user_id', '=', 'users.id')
       ->where('career', 'like', "%{$keyword_career}%")
       ->where('service', 'like', "%{$keyword_service}%")
       ->where('tyuuto', 'like', "%{$keyword_shinsotsu}%")
       ->where('tyuuto', 'like', "%{$keyword_tyuuto}%")
       ->where('comment', 'like', "%{$keyword_mba}%")
       ->where('comment', 'like', "%{$keyword_sankyuu}%")
       ->whereBetween('start_career', [1997, $keyword_end]);
        
        }else{
        $query->join('users', 'user_careers.user_id', '=', 'users.id')
       ->where('career', 'like', "%{$keyword_career}%")
       ->where('service', 'like', "%{$keyword_service}%")
       ->where('tyuuto', 'like', "%{$keyword_shinsotsu}%")
       ->where('tyuuto', 'like', "%{$keyword_tyuuto}%")
       ->where('comment', 'like', "%{$keyword_mba}%")
       ->where('comment', 'like', "%{$keyword_sankyuu}%");
       }
  
  
    //dd($query->toSql());
       return $query->orderBy('user_id')->paginate(100);
  
    }
}
