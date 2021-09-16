<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gifts;
use App\Models\Requests;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Gifts::where('status', 1)->orderBy('updated_at', 'desc')->paginate(5);
        return view('admin.list-category',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $obj->category_name = $request->get('name');
        $obj->save();
        return redirect('/admin/list-category');
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
        $item = Category::find($id);
        return view('admin.edit-category',['item'=> $item]);
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
        $obj = Category::find($id);
        $obj->category_name = $request->get('name');
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/list-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        $obj->delete();
        return redirect('/admin/list-category');
    }

    public function category(Request $request)
    {
        $selectCate = $request->get('categoryId');
        $category = Category::all();
        $list = Gifts::where('status','=',0)->orderBy('updated_at', 'desc');
        if ($selectCate != 0 ){
            $list = $list->where('categoryId', $selectCate);
        }
        $list = $list->paginate(5);
        return view('user.category', ['category'=>$category, 'selectCate' =>$selectCate, 'list'=>$list]);
    }
}
