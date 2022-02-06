<?php

namespace App\Http\Controllers;

use App\Post;
use App\Game;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post,Game $game)
    {
        return view('posts/index')->with([
            'posts' => $post->getPaginateByLimit(),
            'games'=>$game->get(),
            ]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Game $game)
    {
        return view('posts/create')->with(['games'=>$game->get()]);;
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post, Game $game)
    {
        return view('posts/edit')->with([
            'post' => $post,
            'games'=>$game->get(),
            ]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function GameCreate()
    {
        return view('games/create');
    }
    
    public function GameStore(Request $request, Game $game)
    {
        $input = $request['game'];
        $game->fill($input)->save();
        return redirect('/games/create/');
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
