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
    
    
     public function create()
    {
        $user=\Auth::user();
        // $user = User::find($id);
        return view('user_career.create', ['id' => $user->id]);
    }
    
    public function store(Request $request)
    {
        \Auth::user()->careers()->create([
            'career' => $request->career,
            'position' => $request->position,
            'start' => $request->start,
            'end' => $request->end,
            'project_detail' => $request->project_detail,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }
    
    public function edit($id){
        $user = User::find($id);
        $career = Usercareer::find($id);
        return view('user_career.edit', ['user'=>$user, 'id' => $user->id, 'career' => $career]);
    }
    
    public function update(Request $request, $id){
        $this->validate($request, [
            'user_career' => 'required|max:191',
        ]);

        $career = Usercareer::find($id);
        \Auth::user()->user_career()->update([
            'user_career' => $request->user_career,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }   
}
