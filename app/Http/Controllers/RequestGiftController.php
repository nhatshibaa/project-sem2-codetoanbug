<?php

namespace App\Http\Controllers;

use App\Models\Gifts;
use App\Models\Requests;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RequestGiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idUser = session()->get('idUser');
        $itemRequest = Requests::where('idUser', $idUser)->get();
        return view('user.my-request', ['itemRequest' => $itemRequest] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        if (\session()->has('username')) {
            $obj = new Requests();
            $obj->idUser = $request->get('userId');
            $obj->idUserRequest = \session()->get('idUser');
            $obj->giftId = $request->get('giftId');
            $obj->content = $request->get('content');
            $obj->status = 0;
            $obj->save();
            alert('Gửi yêu cầu thành công', 'Vui lòng chờ người cho chấp nhận yêu cầu!', 'info');
            return redirect('/');
        } else {
            alert('Thông báo', 'Vui lòng đăng nhập', 'warning');
            return redirect('/login');
        }

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
        //
        $obj = Requests::find($id);
        $obj->status = 1;
        $obj->updated_at = Carbon::now();
        $obj->save();

        $userRequest = Users::find($obj->idUserRequest);
        $user = Users::find($obj->idUser);

        $gift = Gifts::where('id', $obj->giftId)->first();
        $gift->status = 1;
        $gift->updated_at = Carbon::now();
        $gift->save();
        alert()->success('Success', 'oke');
        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung', 'phone'=>$user->phone);
        Mail::send('email.confirm-request', $data, function ($message) use ($userRequest) {
            $message->to($userRequest->email, 'Tutorials Point')->subject
            ('Thông báo chờ admin phê duyệt tài khoản!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = Requests::find($id);
        $obj->status = -1;
        $obj->updated_at = Carbon::now();
        $obj->save();

        $userRequest = Users::find($obj->idUserRequest);
        $user = Users::find($obj->idUser);

        alert()->success('Success', 'oke');
        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung', 'phone'=>$user->phone);
        Mail::send('email.refuse', $data, function ($message) use ($userRequest) {
            $message->to($userRequest->email, 'Tutorials Point')->subject
            ('Thông báo chờ admin phê duyệt tài khoản!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        return redirect('/');
    }
}
