<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
class UserController extends Controller
{
    // public function index(){
    // 	$user = User::find(2);
    // 	$post1 = new Post;
    // 	$post1->title = "PHP Developers";

    // 	$post2 = new Post;
    // 	$post2->title = "HTML Developers";
    	
    // 	$user->posts()->saveMany([$post1,$post2]);
    // 	echo "Post Create Successfully";
    // }
    // public function viewPost(){
    // 	$users = User::with('posts')->get();
    // 	 foreach($users as $user){
    // 	 	echo $user->posts;
    // 	 }

    // }

    public function index(){

    	// $user = User::find(10);
    	// $userId = [2];
    	// $user->roles()->attach($userId);
    	$user = User::find(10);
    	echo $user->name;
    	foreach($user->roles as $role){
    		echo $role;
    	}

    }
}
