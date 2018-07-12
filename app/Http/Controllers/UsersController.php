<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $careers = $user->careers()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
                'id' => $user->id,
                'user' => $user,
                'careers' => $careers,
            ];
        
        return view('users.show', $data);
    }
    
     public function search(Request $request)
    {
        $keyword = $request->keyword;
        $result = \App\User::search($keyword);
        
        return view('search.search', [
            'result' => $result,
            'keyword' => $keyword,
        ]);
    }
    
    public function favorites($id)
    {
       $user = User::find($id);
       $favorites = $user->favorites()->paginate(10);
       
       $data = [
            'user' => $user,
            'favorites' => $favorites,
        ];

        return view('users.favorites', $data);
    }
    
}