<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    // function add() {
        
    //     $title = 'post 5';
    //     $slug = Str::slug ($title, '-');

    //     $users = User::all();

    //     foreach ($users as $user){
            
    //          DB::table( 'posts' ) -> insert ( [
    //             'title'   => $title,
    //             'content' => 'content 5',
    //             'user_id' => $user->id,
    //             'slug'    => $slug,

    //         ]);
    //     }  
    // }

    //   function add() {

    //   $title = "Samsung phone";
    //   $slug  = Str::slug($title, '-');
    //   $users = User::where('id', 6) -> get();

    //   foreach($users as $user) {

    //         $posts =  new Post;
    //         $posts -> title   = $title; 
    //         $posts -> content = "I like new Samsung phone";
    //         $posts -> user_id = $user->id;
    //         $posts -> slug    = $slug;

    //         $posts -> save();
    //     };
     // }

    // function add () {
        
    //     $title = "Vivo phone";
    //     $slug  = Str::slug($title, '-');
    //     $users = User::where('id', 5 ) -> get();
        
    //     foreach ($users as $user ) {
    //          Post::create([
    //             'title'   => $title,
    //             'content' => 'Whether you are new to PHP',
    //             'user_id' => $user->id,
    //             'slug'    => $slug,
    //          ]);
    //     }
       
    // }
    
    function add () {
        return view ('posts.create');
    
    }

    function store (Request $request) {
        
        $request -> validate(
            [
                'title'    => 'required',
                'content'  => 'required'
            ],
            [
                'required' => ':attribute không được để trống ',
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung',
            ],
       
        );

        if( $request -> hasFile('file')) {
                echo "has file";

        }

        return $request->input();

    }


    function show() {
    //   $posts = DB::table('posts')->get();

    //     // echo "<pre>";
    //     // print_r($posts); 
        
    //    foreach ($posts as $post) {
    //         echo "Noi Dung: " . $post -> content;
    //         echo "<br>";
    //         echo "<br>";
    //         echo "Nguoi tao: " . $post -> user_id;
    //    }
        // $posts = DB::table('posts')->paginate(3);
        
       $posts = Post::simplePaginate(3);
        
        return view('posts.index', [
            'posts' => $posts
        ]);

         



    }
    
    function read() {
        // $posts = Post::where( 'title' , 'like', '%iphone%' )->first() ;
        // return $posts -> content;  
        // $posts = Post::orderBy('id')->get();

        $posts =  Post::selectRaw("count(id) as number_of_posts, user_id")
        -> groupBy('user_id')
        -> get();


        return $posts;


    }























}