<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCareer;

class UserCareerController extends Controller
{
    public function index()
    {
        $date = [];
    
        if (\Auth::check()) {
            $user = \Auth::user();
            $careers = $user->feed_careers()->orderBy('created_at', 'desc')->paginate(10);

              $data = [
                'user' => $user,
                'careers' => $careers,
            ];

            return view('welcome', $data);
            
        }
            return view('welcome');
    
    }
    
    
     public function show()
    {
        $user=\Auth::user();
        $careers = $user->careers()->orderBy('start', 'desc')->paginate(10);
        $educations = $user->educations()->paginate(10);
        
        $data = [
                'id' => $user->id,
                'user' => $user,
                'careers' => $careers,
                'educations' => $educations,
            ];
        return view('users.show', $data);
    }
    
    
     public function create()
    {
        $user=\Auth::user();
        return view('user_career.create', ['id' => $user->id]);
    }
    
    public function store(Request $request)
    {
        \Auth::user()->where('id', \Auth::user()->id)->update([
            'tyuuto' => $request->tyuuto,
            ]);
        \Auth::user()->user_picture()->create([
            'user_picture' => 'panda0',
            ]);
        \Auth::user()->careers()->create([
            'career' => $request->career,
            'service' => $request->service,
            'position' => $request->position,
            'start' => $request->start,
            'end' => $request->end,
            'project_detail' => $request->project_detail,
            ]);

        return redirect(route('search.get', [\Auth::user()->id]));
        
    }
    
    public function edit($id){
        $career = UserCareer::find($id);
        $user = $career->user;
        return view('user_career.edit', ['user'=>$user, 'career' => $career]);
    }
    
    public function update(Request $request, $id){
         \Auth::user()->careers()->where('id', $id)->update([
            'career' => $request->career,
            'position' => $request->position,
            'start' => $request->start,
            'end' => $request->end,
            'project_detail' => $request->project_detail,
            ]);

        return redirect(route('user_career.show', [\Auth::user()->id]));
    }   
    
     public function search(Request $request)
    {
       $time_start = microtime(true);

       // 計測したい処理
       
       //Requestからkeyword抽出
       $keyword_start = $request->keyword_start;
       $keyword_end = $request->keyword_end;

       //string -> int変換
       $keyword_start = intval($keyword_start);
       $keyword_end = intval($keyword_end);

       if (\Auth::check()){
           if($request->keyword_shinsotsu!=null && $request->keyword_tyuuto!=null){
               $keyword_career = $request->keyword_career;
               $keyword_service = $request->keyword_service;
               $keyword_mba = $request->keyword_mba;
               $keyword_sankyuu = $request->keyword_sankyuu;
               $keyword_shinsotsu = null;
               $keyword_tyuuto = null;
               $keyword_university = $request-> keyword_university;
               
           }
           else{
               $keyword_career = $request->keyword_career;
               $keyword_service = $request->keyword_service;
               $keyword_shinsotsu = $request->keyword_shinsotsu;
               $keyword_tyuuto = $request->keyword_tyuuto;
               $keyword_mba = $request->keyword_mba;
               $keyword_sankyuu = $request->keyword_sankyuu;
               $keyword_university = $request-> keyword_university;
           }
           
       $result = \App\UserCareer::search($keyword_career, $keyword_service, $keyword_tyuuto, $keyword_shinsotsu, $keyword_mba, $keyword_sankyuu, $keyword_start, $keyword_end, $keyword_university);
       
       return view('search.search', [
           'result' => $result,
           'keyword_career' => $keyword_career,
           'keyword_service' => $keyword_service,
           'keyword_shinsotsu' => $keyword_shinsotsu,
           'keyword_tyuuto' => $keyword_tyuuto,
           'keyword_mba' => $keyword_mba,
           'keyword_sankyuu' => $keyword_sankyuu,
           'keyword_start' => $request->keyword_start,
           'keyword_end' => $request->keyword_end,
           
           'time_start' => $time_start,
       ]);
       }
       else{
           return view('welcome');
       }
    }
    
    
     public function destroy($id)
    {
        $career = UserCareer::find($id);
        $user = $career->user;
        
        if (\Auth::user()->id === $career->user_id) {
            $career->delete();
        }

        return redirect()->back();
    }
}
