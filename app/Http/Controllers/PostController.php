<?php

namespace App\Http\Controllers;

dev_basis02
use App\Models\Post;
use Illuminate\Http\Request;
 master

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);

    }
}
?>


