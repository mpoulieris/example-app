<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; #einai to Post apo ta Models


class PostsController extends Controller{

    public function index(){
        $posts=Post::all();
        return view('posts',['posts'=>$posts ]);
    }
    public function newpost(Request $request){
        /*if ($request->method()=='POST'){
            if (empty($post['title' or 'body'])){
            echo 'ΣΥΜΠΛΗΡΩΣΤΕ ΟΛΑ ΤΑ ΠΕΔΙΑ';
             
            }*/
        if($request->method()=='POST'){
            
                $post=new POST();
                $post->title=$request->get('title');
                $post->body=$request->get('body'); 
                if ($post-> save()){
                    echo 'η αναρτηση καταχωρηθηκε επιτυχώς ';
                    return redirect ('/posts');
                        
            
                 };
            };

        
        return view ('newpost');        
    }


    public function post(Post $post){
        return view ('post',['post'=>$post]);
        }


    public function replypost(Post $post,Request $request){        
        if ($request->method()=='POST'){       
            
            $post->body=$request->get('body');
            $post->save();
            if ($post-> save()){
                echo 'η αναρτηση καταχωρηθηκε επιτυχώς ';
                return redirect ('/post');
                };
            };             
        return view ('post',['post'=>$post]);
        }


    public function edit_post(Post $post,Request $request){
        if ($request->method()=='POST'){
            $post->title=$request->get('title');
            $post->body=$request->get('body');
            $post->save();
            if ($post-> save()){
                echo 'η αναρτηση καταχωρηθηκε επιτυχώς ';
                return redirect ('/posts');
                };
            };             
        return view ('edit_post',['post'=>$post]);
        }



    public function search(Request $request){
        $q=$request->get('q','ΚΕΝΗ');
        if (!$request->filled('q')) $q='ΚΕΝΗ';
        else{
            $posts= Post::Where('title','like','%'.$q .'%')->orWhere('body','like','%'.$q.'%')->get();
        }
        return view ('posts',['posts'=>$posts]);
    }


    public function delete_post(Post $post){
        $post->delete();
        echo 'το αρθρο διεγραφη επιτυχως ';
        return redirect('posts');
        }
}