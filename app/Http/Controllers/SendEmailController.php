<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function send(Request $request)
    {
        ////        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
        //        Mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
        //        return response()->json(['message' => 'Request completed']);

        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('email.mail', $data, function ($message) {
            $message->to('nhatnt2406@gmail.com', 'Tutorials Point')->subject
            ('Thông báo đăng ký tài khoản thành công');
            $message->from('kidsclothesfree@gmail.com', 'KidsClothesFree Administrator');
        });
        return redirect('/');

    }
}
