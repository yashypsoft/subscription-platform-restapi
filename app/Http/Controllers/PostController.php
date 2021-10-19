<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\ResponseAPI;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use ResponseAPI;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $posts = Post::all();
            return $this->success('All Posts',$posts);
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
            $request->validate(Post::getValidationRules());
            $data                 = $request->all();
            $data['is_mail_send'] = 0;
            $data['slug']         = Str::slug($request->get('title'));
            $data['status']       = (isset($data['status'])) ? $data['status'] : 1;
            $post                 = Post::create($data);
            Artisan::call('mail:send', ['post' => $post->id]);
            return $this->success('Added Post successfully.',$post);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
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
            $post = Post::find($id);
            if (empty($post)) {
                throw new Exception("Invalid request.");
            }
            return $this->success('Single Post',$post);
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
