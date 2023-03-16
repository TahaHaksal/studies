<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Ex4Controller extends Controller
{
    public $post_id;

    public function __construct()
    {
        $this->post_id = 101;
    }

    public function getAllPosts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        return $response;
    }

    public function getPostById($id) {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id)->json();
        return $response;
    }

    public function insertPost() {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'user_id' => 10,
            'id' => $this->post_id,
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
        ]);
        $this->post_id++;
        return $response;
    }

    public function updatePost(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => fake()->sentence().' Updated correctly.',
            'body' => fake()->paragraph().' Updated correctly.',
        ])->json();
        return $response;
    }

    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id)->json();
        return $response;
    }
}
