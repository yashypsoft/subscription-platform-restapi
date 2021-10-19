<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repository\UserRepositoryInterface;
use App\Traits\ResponseAPI;
use Exception;

/**
 * @group  Users
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    use ResponseAPI;
    protected $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $this->success('All Users',$this->userRepositoryInterface->paginate());
        } catch (Exception $e) {
            return $this->error($e->getMessage());
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
        try {
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed'
            ];

            $request->validate($rules);
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            return $this->success('User added successfully.',$user);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     * @urlParam  id required The Id of the post. Example: 3
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
            $user = User::find($id);
            if (empty($user)) {
                throw new Exception("Not valid user.");
            }
            return $this->success('Single user.',$user);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
