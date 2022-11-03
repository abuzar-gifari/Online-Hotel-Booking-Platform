<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $rooms = Room::get();
        $post_all = Post::orderBy('id','desc')->limit(3)->get();
        return view('front.home',compact('rooms','post_all'));
    }
}
