@extends('admin.layout')

@section('page-css')
    <link href="/assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List Gifts</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="padding-bottom: 30px">List Gift Information</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID User</th>
                                        <th>ID Category</th>
                                        <th>Title</th>
                                        <th>Images</th>
                                        <th>Description</th>
                                        <th>Content</th>
                                        <th>Age Range</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->idUser}}</td>
                                            <td>{{$item->categoryId}}</td>
                                            <td>{{$item->title}}</td>
{{--                                            <td><img src="{{$item->images}}" alt="{{$item->title}}" width="100"></td>--}}
                                            <td>
{{--                                            @foreach($obj->listPhoto as $url)--}}
{{--                                                <img src="{{$url}}" alt="" width="100">--}}
{{--                                            @endforeach--}}
                                                <img src="{{$item->images}}" alt="{{$item->title}}" width="100">
                                            </td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->content}}</td>
                                            <td>{{$item->age}}</td>
                                            <td>{{$item->color}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                                <form action="/admin/list-gift-accept/{{$item->id}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn"><i class="fas fa-check-circle btn-outline-success" style="cursor: pointer; padding-right: 1px"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @include('vendor.pagination.bootstrap-4', ['paginator' => $list])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


