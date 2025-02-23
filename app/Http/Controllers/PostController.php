<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿一覧を表示するアクション
    public function index() {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // 特定の投稿を表示するアクション
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }
}
