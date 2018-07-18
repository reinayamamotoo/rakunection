<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserPicture;

class UserPictureController extends Controller
{
    public function create($id)
    {
        $user = User::find($id);
        return view('user_picture.select', ['id' => $user->id]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_picture' => 'required|max:191',
        ]);

        $picture = new UserPicture;
        \Auth::user()->user_picture()->create([
            'user_picture' => $request->user_picture,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }
    
    public function edit($id){
        $user = User::find($id);
        $picture = UserPicture::find($id);
        return view('user_picture.edit', ['user'=>$user, 'id' => $user->id, 'picture' => $picture]);
    }
    
    public function update(Request $request, $id){
        $this->validate($request, [
            'user_picture' => 'required|max:191',
        ]);

        $picture = UserPicture::find($id);
        \Auth::user()->user_picture()->update([
            'user_picture' => $request->user_picture,
            ]);

        return redirect(route('users.show', [\Auth::user()->id]));
    }
}
