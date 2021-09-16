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
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Create Category</h2>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-angle-right"></i>
                        Please enter category
                    </div>
                    <div class="card-body">
                        <form action="/admin/create-category" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <div class="row">
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Nhập tên danh mục">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
