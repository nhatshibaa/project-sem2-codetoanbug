<?php

namespace App\Http\Controllers;


use App\Models\Configs;
use App\Models\Gifts;
use App\Models\Users;


class UserController extends Controller
{


    public function gift($id)
    {
        $list = Gifts::where('status', 1)->orderBy('updated_at', 'desc')->paginate(6);
        $item = Gifts::find($id);
        $account = Users::where('id', $item->idUser)->first();
        $category = Gifts::where('id', $item->categoryId);
        return view('user.gift-detail', ['item' => $item, 'account' => $account, 'list' => $list, 'category'=>$category]);
    }

    public function blog()
    {
        return view("user.blog");
    }

    public function blogDetail()
    {
        return view("user.blog-detail");
    }

    public function about()
    {
        $content = Configs::all();
        return view("user.about", ['contents' => $content]);
    }

    public function policy()
    {
        return view("user.policy");
    }

    public function contact()
    {
        return view('user.contact');
    }
}
