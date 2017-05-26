<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ControllersFormRequests;
use App\Post;
use Cache;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index( $id = null ) {
        return ($id !== null) ? $this->getCache( 'posts' ) : $this->getCache( $id );
    }

    public function create( FormRequests $request ) {
        Post::insert([
            'user_id' => $request->user()->id,
            'active' => $request->input('active'),
            'title' => $request->input ('title'),
            'body' => $request->input('body'),
            'published_at' => Carbon::now()
        ]);

        $this->resetCache();
    }

    public function update( FormRequests $request ) {
        $post = Post::findOrFail( $request->input('id') );

        $post->fill([
            'active' => $request->input('active'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        $this->resetCache( $post->id );
    }

    private function getCache( $ref ) {
        switch( $ref ) {
            case 'posts':
                return Cache::remember( $ref, $this->timeout, function() {
                    return Post::all();
                });
            default:
                return Cache::remember( 'post_' . $ref, $this->timeout, function() use ($ref) {
                    return Post::find($ref);
                });
        }
    }

    private function resetCache( $single = null ) {
        if( $single ) Cache::forget( 'post_' . $single );
        
        Cache::forget( 'posts' );
    }
}
