<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Admin;
use App\Models\Gifts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostGiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Gifts::where('status',  0)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-gift',['list' =>$list]);
    }

    public function listGiftAccept()
    {
        $list = Gifts::where('status',  1)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-gift-accept',['list' =>$list]);
    }

    public function listGiftRefuse()
    {
        $list = Gifts::where('status',  -1)->paginate(5);
        return view('admin.list-gift-refuse',['list' =>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.post-gift');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        $request->validated();
        $obj = new Gifts();
        $obj->title = $request->get('title');
        $obj->idUser = 1;
        $obj->age = $request->get('ageRange');
        $obj->categoryId = $request->get('category');
        $obj->images = $request->get('images');
        $obj->description = $request->get('description');
        $obj->content = $request->get('content');
        $obj->color = $request->get('color');
        $obj->size = $request->get('size');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Gifts::find($id);
        $obj->status = 1;
        $obj->updated_at = \Carbon\Carbon::now();
        $obj->save();
        return redirect('admin/list-gift');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Gifts::find($id);
        $obj->status = -1;
        $obj->updated_at = \Carbon\Carbon::now();
        $obj->save();
        return redirect('admin/list-gift');
    }
}
