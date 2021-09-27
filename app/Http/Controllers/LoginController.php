<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestLogin;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.login');
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
    public function store(RequestLogin $request)
    {
        //
        $username = $request->get('username');
        $password = $request->get('password');
        $login = Users::where('username', $username)->first();
        if ($login && $login->status == 1){
            if (Hash::check($password, $login->password_hash)) {
                $request->session()->put('username', $login->username);
                $request->session()->put('idUser', $login->id);
                alert()->success('Success', 'Đăng nhập thành công');
                return redirect('/');
            } else {
                alert()->error('Error', 'Tài khoản hoặc mật khẩu không đúng');
                return redirect('/login');
            }
        }else{
            alert()->error('Error', 'Tài khoản không tồn tại hoặc chưa được duyệt');
            return redirect('/login');
        }
    }

    public function logout()
    {
        if (session()->has('username')) {
            session()->forget('username');
            session()->forget('idUser');
            return redirect('/');
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
    }
}
