<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use  App\Transformers\UserTransformer;
class UserController extends Controller
{
    public function users(ModelUser $user){
        $users= $user->all();

       
        return response()-> json($users);
    }
    public function usersByID($id){
        return response()->json(ModelUser::find($id),200);
    }
    public function addUser(Request $request){
        $user   = ModelUser::create($request->all());
        return response()->json($user,201); 
    }
}
