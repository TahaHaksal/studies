<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ex11Controller extends Controller
{
    public function __construct(){
        //
    }

    public function index(){
        //
    }

    public function storeRandomPost(){
        DB::table('posts')->insert([
            'title' => fake()->sentence(1),
            'body' => fake()->paragraph(4),
        ]);
        echo 'Value stored. Check db.';
    }

    public function storePost(){
        return view('storepost');
    }

    public function getAllPosts(){
        $posts = DB::table('posts')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function storeMethodPost(Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created', 'Post has been saved!');
    }

    public function singlePost($id){
        $post = DB::table('posts')->where('id', '=', $id)->get()->first();
        return view('single-post', [
            'post' => $post
        ]);
    }

    public function deletePost($id){
        DB::table('posts')->delete($id);
        return redirect('/ex11/allPost');
    }

    public function editPost($id){
        $post = DB::table('posts')->where('id', '=', $id)->get()->first();
        return view('edit-post', [
            'post' => $post
        ]);
    }

    public function editPostSave($id, Request $request){
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);
        DB::table('posts')->where('id', '=', $id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_edited', 'Post has been edited!');
    }

    public function __destruct(){
        //
    }
}
