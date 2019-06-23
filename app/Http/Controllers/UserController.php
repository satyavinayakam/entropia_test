<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index(){
        $users = Users::paginate(15);

        return response()->json($users);
    }

    public function show(){

    }

    public function store(Request $request){

        $users = new Users([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'user_type' => $request->get('user_type')
        ]);

        $users->save();
    }

    public function edit(){
        $users = Users::find($id);
    }

    public function update(Request $request){
        $users = Users:: find($id);

        $users->username = $request->get('username');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->user_type = $request->get('user_type');

        $users->save();
    }

    public function delete(){
        $users = Users::find($id);
        $users->delete();
    }


}
