<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 23/11/2017
 * Time: 10:27
 */

namespace App\Http\Controllers;


use App\Spend;
use App\User;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function __construct(){
        view()->composer('front.home', function($view){
            $users = User::all();
            $view->with('users', $users);

        });
        /*
        view()->composer('partials.sidebar', function($view){
            $results = Result::allAvg();
            $users = [];
            foreach ($results as $result) {
                $users[] = User::find($result->user_id);
            }
            $view->with(['results'=> $results, 'users' => $users]);
        });*/
    }
    public function spends(){
        $spends = Spend::all();
        $users = User::all();
        $u = Auth::id();
        $uLog = User::findOrFail($u);
        return view('front.home', compact('spends', 'users', 'uLog'));
    }


    /*public function showPost($id){
        $post = Post::findOrFail($id);
        return view('front.post', ['post' => $post]);
    }
    public function showCategory($id){
        $category = Category::findOrFail($id);
        $posts = $category->posts;
        return view('front.category', ['posts' => $posts, 'title'=> $category->title]);
    }
    public function showTag($id){
        $tag = Tag::findOrFail($id);
        $posts = $tag->posts;
        return view('front.tag', ['posts' => $posts, 'title'=> $tag->name]);
    }*/
}