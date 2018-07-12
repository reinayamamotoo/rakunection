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
        $careers = $user->careers()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
                'id' => $user->id,
                'user' => $user,
                'careers' => $careers,
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
        \Auth::user()->careers()->create([
            'career' => $request->career,
            'service' => $request->service,
            'position' => $request->position,
            'start' => $request->start,
            'end' => $request->end,
            'project_detail' => $request->project_detail,
            ]);

        return redirect(route('user_career.show', [\Auth::user()->id]));
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
        if (\Auth::check()){
        $keyword_career = $request->keyword_career;
        $keyword_service = $request->keyword_service;
        $keyword_tyuuto = $request->tyuuto;
        $keyword_ikukyuu = $request->ikukyuu;
        
        var_dump($keyword_tyuuto);
        var_dump($keyword_ikukyuu);
        exit;
        
        
        $result = \App\UserCareer::search($keyword_career, $keyword_service);
        
        return view('search.search', [
            'result' => $result,
            'keyword_career' => $keyword_career,
            'keyword_service' => $keyword_service,
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
