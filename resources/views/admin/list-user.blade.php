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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">List User</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="padding-bottom: 30px">List User Information</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>ID number</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Img_CardID_Front</th>
                                        <th>Img_CardID_Back</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->fullName}}</td>
                                        <td>{{$item->idNumber}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->gender}}</td>
                                        <td><img src="{{$item->imgIdCardFront}}" alt="{{$item->fullname}}" width="100"></td>
                                        <td><img src="{{$item->imgIdCardBack}}" alt="{{$item->fullname}}" width="100"></td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <form action="/admin/list-user/{{$item->id}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn"><i class="fas fa-check-circle btn-outline-success" style="cursor: pointer; padding-right: 1px"></i></button>
                                            </form>

                                            <form action="/admin/list-user/{{$item->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn"><i class="fas fa-times btn-outline-danger" style="cursor: pointer; padding-right: 5px"></i></button>
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

@section('page-js')
{{--    <script src="/assets/plugins/tables/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="/assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>--}}
{{--    <script src="/assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>--}}
@endsection
