<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEducation;
use App\User;

class UserEducationController extends Controller
{
     public function create()
    {
        $user = \Auth::user();
        return view('user_education.create', ['id' => $user->id, 'user' => $user]);
    }
    
    public function store(Request $request)
    {
        $user = \Auth::user();
        \Auth::user()->educations()->create([
            'university' => $request->university,
            'major' => $request->major,
            ]);
            
        return redirect(route('users.show', [\Auth::user()->id]));
    }
    
    public function edit($id){
        $education = UserEducation::find($id);
        $user = $education->user;
        return view('user_education.edit', ['user' => $user, 'education' => $education]);
    }
    
    public function update(Request $request, $id){
        \Auth::user()->educations()->where('id', $id)->update([
            'university' => $request->university,
            'major' => $request->major,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }
}    