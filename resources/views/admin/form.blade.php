@extends('admin.layout')

@section('content')
    <div class="content-body" style="min-height: 884px;">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="/admin/form" method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group md-3">
                                        <label class="control-label">Policy Page</label>
                                        <textarea name="policy-page" id="ckeditor" cols="147" rows="10">{{$configPage->policyPage}}</textarea>
                                        @error('policy-page')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group md-3">
                                        <label class="control-label">About Us Page</label>
                                        <textarea name="about-us" id="ckeditor1" cols="147" rows="10">{{$configPage->aboutUsPage}}</textarea>
                                        @error('about-us')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Title Page
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="Title-Page" placeholder="Enter a Title Page..">{{$configPage->titlePage}}
                                            @error('Title-Page')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group md-3">
                                        <label class="control-label">Description Page</label>
                                        <textarea name="description" id="description" cols="147" rows="10">{{$configPage->descriptionPage}}</textarea>
                                        @error('description')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="form-group md-3">
                                        <label class="control-label">Keyword Page</label>
                                        <textarea name="keyword" id="keyword" cols="147" rows="10">{{$configPage->keywordPage}}</textarea>
                                        @error('keyword')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
