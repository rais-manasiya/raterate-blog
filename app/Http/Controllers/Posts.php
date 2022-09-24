<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Http;

class Posts extends Controller
{
    public function fetchAllPosts($uid = null)
    {
        if($uid){
            $response = Http::get('https://dummyjson.com/posts/user/'.$uid);
        }
        else{
            $response = Http::get('https://dummyjson.com/posts/');
        }
        
        $postDetailsArr = json_decode($response->body());
        
        foreach($postDetailsArr as $postDetails){
            foreach($postDetails as $post){
                $postInfo = new post();            
                $postInfo->title = $post->title;
                $postInfo->body = $post->body;
                $postInfo->userId = $post->userId;
                $postInfo->save();           
            }
            break;
        }
        return response()->json([
            "success" => true,
            "message" => "Post added successfully.",
            ]);

    }
}
