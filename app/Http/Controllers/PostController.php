<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Models\Post;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Artisan;

class PostController extends CoreController
{
    public function index()
    {
        try{
            $posts = Post::all();
            return $this->showAll($posts);
        }catch(Exception $e){
            return $this->errorResponse($e->getMessage(),404);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate(Post::getValidationRules());
            $data = $request->all();
            $data['is_mail_send'] = 0;
            $data['slug']   = Str::slug($request->get('title'));
            $data['status'] = (isset($data['status']))?$data['status']:1;
            $post = Post::create($data);
            Artisan::call('mail:send', ['post' => $post->id]);
            return $this->showOne($post, 200);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(),404);
        }
    }

    public function findOne(Request $request)
    {
        try{
            $post = Post::find($request->id);
            if(empty($post)){
                throw new Exception("Invalid request.");
            }
            return $this->showOne($post, 200);
        }catch(Exception $e){
            return $this->errorResponse($e->getMessage(),404);
        }
    }
}
