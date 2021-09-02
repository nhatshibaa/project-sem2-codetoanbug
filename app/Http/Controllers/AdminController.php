<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Gifts;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view("admin.form");
    }
    public function listAdmin(){
        return view("admin.list-admin", ['list'=> Admin::paginate(1)]);
    }
    public function listCategory(){
        return view("admin.list-category", ['list'=> Category::paginate(3)]);
    }
    public function listArticle(){
        return view("admin.list-article", ['list'=> Article::paginate(2)]);
    }
}
