<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPost;
use App\Http\Requests\StorePostRequest;
use App\Models\Admin;
use App\Models\Gifts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class PostGiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Gifts::where('status', 0)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-gift', ['list' => $list]);
    }

    public function listGiftAccept()
    {
        $list = Gifts::where('status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-gift-accept', ['list' => $list]);
    }

    public function listGiftRefuse()
    {
        $list = Gifts::where('status', -1)->paginate(5);
        return view('admin.list-gift-refuse', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (session()->has('username')) {
            return view('user.post-gift');
        } else {
            alert('Thông báo', 'Vui lòng đăng nhập trước khi đăng bài', 'warning');
            return redirect('/login');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate(
            [
                'title' => 'required|min:10',
                'category' => 'required',
                'description' => 'required|min:20',
                'content' => 'required|min:20',
                'color' => 'required',
                'size' => 'required',
                'ageRange' => 'required',
            ],
            [
                'title.required' => 'Vui lòng nhập tiêu đề.',
                'title.min' => 'Tiêu đề phải có ít nhất 10 ký tự.',
                'category.required' => 'Vui lòng chọn danh mục.',
                'color.required' => 'Vui lòng chọn màu sắc.',
                'size.required' => 'Vui lòng chọn size.',
                'ageRange.required' => 'Vui lòng chọn độ tuổi.',
                'description.required' => 'Vui lòng nhập mô tả quà tặng',
                'description.min' => 'Mô tả quà tặng có ít nhất 25 ký tự.',
                'content.required' => 'Vui lòng nhập mô tả chi tiết quà tặng',
                'content.min' => 'Mô tả chi tiết quà tặng có ít nhất 20 ký tự.',
            ]);

        $obj = new Gifts();
        $obj->idUser = \session()->get('idUser');
        $obj->categoryId = $request->get('category');
        $obj->title = $request->get('title');
        $obj->images = $request->get('image');
        $obj->description = $request->get('description');
        $obj->content = $request->get('content');
        $obj->color = $request->get('color');
        $obj->size = $request->get('size');
        $obj->age = $request->get('ageRange');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        alert('Đăng bài thành công', 'Vui lòng chờ admin duyệt bài và gửi email thông báo!', 'success');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Gifts::find($id);
        $obj->status = 1;
        $obj->updated_at = \Carbon\Carbon::now();
        $obj->save();
//        alert('Phê duyệt tài khoản thành công', 'Đã gửi email thông báo!', 'success');
        return redirect('admin/list-gift');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
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
