<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestConfig;
use App\Models\Configs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $configPage = Configs::find(1);
        return view("admin.form", ['configPage'=>$configPage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestConfig $request)
    {
        //
        $request->validated();
//        $obj = new Configs();
        $obj = Configs::find(1);
        $obj->aboutUsPage = $request->get('about-us');
        $obj->policyPage = $request->get('policy-page');
        $obj->titlePage = $request->get('Title-Page');
        $obj->descriptionPage = $request->get('description');
        $obj->keywordPage = $request->get('keyword');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/admin/form');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
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
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
