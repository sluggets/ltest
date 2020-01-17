<?php

namespace App\Http\Controllers;

/**
 * Class PostsController
 * @author timothy longoria
 */
class PostsController
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first post',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found');
        }


        return view('post', [
            'post' => $posts[$post]
        ]);
    }
    
}
