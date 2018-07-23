<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserEducation;


class UserProfileController extends Controller
{
    public function create($id)
    {
        $user = User::find($id);
        return view('user_profile.create', ['id' => $user->id]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required|max:191',
        ]);

        $user = new User;
        \Auth::user()->create([
            'comment' => $request->comment,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('user_profile.edit', ['user' => $user]);
    }
    
    public function update(Request $request, $id){

        $user = User::find($id);
        \Auth::user()->update([
            'email' => $request->email,
            'homecountry' => $request->homecountry,
            'club' => $request->club,
            'comment' => $request->comment,
            ]);
            
        if($user->educations['university']==null && $user->educations['major']==null){
            \Auth::user()->educations()->create([
                'university' => $request->university,
                'major' => $request->major,
            ]);   
        }
        
        else{
            \Auth::user()->educations()->update([
                'university' => $request->university,
                'major' => $request->major,
            ]);   
        }
            

        return redirect(route('users.show', [\Auth::user()->id]));
    }
}
