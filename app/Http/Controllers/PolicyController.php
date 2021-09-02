<?php

namespace App\Http\Controllers;

use App\Models\Configs;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    //
    public function policy(){
        $content = Configs::all();
        return view("user.policy", ['configs'=>$content]);
    }
}
