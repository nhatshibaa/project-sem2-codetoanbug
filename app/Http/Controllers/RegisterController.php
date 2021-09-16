<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRegister;
use App\Models\Admin;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Keygen\Keygen;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view("admin.list-user", ['list' => Users::paginate(5)]);

        $list = Admin::where('status', 0)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-user', ['list' => $list]);
    }

    public function listUserAccept()
    {
        $list = Admin::where('status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.list-user-accept', ['list' => $list]);
    }

    public function listUserRefuse()
    {
        $list = Admin::where('status', -1)->paginate(5);
        return view('admin.list-user-refuse', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestRegister $request)
    {
        $password = $request->get('password');
        $request->validated();
        $obj = new Users();
        $obj->fullName = $request->get('fullName');
        $obj->idNumber = $request->get('idNumber');
        $obj->age = $request->get('age');
        $obj->address = $request->get('address');
        $obj->gender = $request->get('gender');
        $obj->phone = $request->get('phone');
        $obj->username = $request->get('username');
        $obj->password_hash = Hash::make($password);
        $obj->email = $request->get('email');
        $obj->imgIdCardFront = $request->get('imgCardIDf');
        $obj->imgIdCardBack = $request->get('imgCardIDb');
        $obj->city = $request->get('city');
        $obj->district = $request->get('district');
        $obj->ward = $request->get('ward');
        $obj->status = 0;
        $obj->save();
        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('email.progress', $data, function ($message) use ($obj) {
            $message->to($obj->email, 'Tutorials Point')->subject
            ('Thông báo chờ admin phê duyệt tài khoản!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        alert('Đăng ký thành công', 'Vui lòng chờ admin duyệt tài khoản và gửi email thông báo!', 'success');
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
    public
    function edit($id)
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
        $obj = Admin::find($id);
        $obj->status = 1;
        $obj->updated_at = \Carbon\Carbon::now();
        $obj->save();
//        alert('Phê duyệt tài khoản thành công', 'Đã gửi email thông báo!', 'success');
        return redirect('admin/list-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Admin::find($id);
        $obj->status = -1;
        $obj->updated_at = \Carbon\Carbon::now();
        $obj->save();
//        alert('Từ chối tài khoản thành công', 'Đã gửi email thông báo!', 'success');
        return redirect('admin/list-user');

    }
}
