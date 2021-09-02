<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use App\Models\Configs;
use App\Models\Gifts;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
//        $list = Gifts::where('status',  1)->orderBy('updated_at', 'desc')->paginate(6);
        return view("user.index", ['list'=> Gifts::paginate(6)]);
    }
    public function category(){
        return view("user.category", ['list'=> Gifts::paginate(5)]);
    }
    public function gift(){
        return view("user.gift-detail");
    }
    public function blog(){
        return view("user.blog");
    }
    public function blogDetail(){
        return view("user.blog-detail");
    }
    public function about(){
        $content = Configs::all();
        return view("user.about", ['contents'=> $content]);
    }
    public function policy(){
        return view("user.policy");
    }
    public function contact(){
        return view('user.contact');
    }
}
