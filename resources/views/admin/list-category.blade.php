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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="padding-bottom: 30px">List Category Information</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Create By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->createBy}}</td>
                                            <td>
                                                <i class="fas fa-check-circle btn-outline-success" style="cursor: pointer; padding-right: 5px"></i>
                                                <i class="fas fa-times btn-outline-danger" style="cursor: pointer"></i>
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
