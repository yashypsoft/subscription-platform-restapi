<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\User;
use Exception;

class UserController extends CoreController
{
    public function index()
    {
        try{
            $users = User::all();
            return $this->showAll($users);
        }catch(Exception $e){
            return $this->errorResponse($e->getMessage(),404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed'
            ];
    
            $request->validate($rules);
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            return $this->showOne($user, 200);
        }catch(Exception $e){
            return $this->errorResponse($e->getMessage(),404);
        }
    }

    public function findOne(Request $request)
    {
        try{
            $user = User::find($request->id);
            if(empty($user)){
                throw new Exception("Not valid user.");
            }
            return $this->showOne($user, 200);
        }catch(Exception $e){
            return $this->errorResponse($e->getMessage(),404);
        }
    }

}
