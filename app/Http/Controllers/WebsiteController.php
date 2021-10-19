<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Website;
use Exception;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $posts = Website::all();
            return $this->showAll($posts);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 404);
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
            $request->validate(Website::getValidationRules());
            $data = $request->all();
            $data['status'] = (isset($data['status'])) ? $data['status'] : 1;
            $post = Website::create($data);
            return $this->showOne($post, 200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $website = Website::find($id);
            if (empty($website)) {
                throw new Exception("Invalid request.");
            }
            return $this->showOne($website, 200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 404);
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

    public function subscribe(Request $request)
    {
        try {
            $website = Website::find($request->get('website_id'));
            $user    = User::find($request->get('user_id'));
            if (empty($website)) {
                throw new Exception("Please provide valid website id.");
            }

            if (empty($user)) {
                throw new Exception("Invalid user found.");
            }

            $website->subscribers()->syncWithoutDetaching([$request->get('user_id')]);
            return $this->successResponse(['message' => 'User subscribed successfully.'], 200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 404);
        }
    }
}
