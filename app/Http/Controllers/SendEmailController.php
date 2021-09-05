<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function progress(Request $request)
    {
        ////        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
        //        Mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
        //        return response()->json(['message' => 'Request completed']);

        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('email.progress', $data, function ($message) {
            $message->to('nhatnt2406@gmail.com', 'Tutorials Point')->subject
            ('Thông báo chờ admin phê duyệt tài khoản!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        return 'Progress';
    }

    public function confirm(Request $request)
    {
        ////        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
        //        Mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
        //        return response()->json(['message' => 'Request completed']);

        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('email.confirm', $data, function ($message) {
            $message->to('nhatnt2406@gmail.com', 'Tutorials Point')->subject
            ('Thông báo đăng ký tài khoản thành công!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        return 'Success';

    }

    public function refuse(Request $request)
    {
        ////        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
        //        Mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
        //        return response()->json(['message' => 'Request completed']);

        $data = array('title' => 'Xin chao vietnam', 'content' => 'Day la noi dung');
        Mail::send('email.refuse', $data, function ($message) {
            $message->to('nhatnt2406@gmail.com', 'Tutorials Point')->subject
            ('Thông báo đăng ký tài khoản không thành công!');
            $message->from('kidsclothesfree@gmail.com', 'Đội ngũ KidsClothesFree');
        });
        return 'Fail';

    }
}
