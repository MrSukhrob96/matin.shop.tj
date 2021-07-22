@extends('_layouts.admin.app')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Clients</a>
                    <span class="breadcrumb-item active">Edit client</span>
                </nav>
            </div>
        </div>
    </div>
    <div class="tab-content m-t-15">
        <div class="tab-pane fade show active" id="tab-account">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit client</h4>
                </div>
                <form method="post" action="{{ route('admin.clients.update', ['client' => 1]) }}" class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="media align-items-center">
                        <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                            <img src="{{ asset('assets/admin/images/avatars/thumb-3.jpg') }}" alt="">
                        </div>
                        <div class="m-l-20 m-r-20">
                            <h5 class="m-b-5 font-size-18">Upload Image</h5>
                            <p class="opacity-07 font-size-13 m-b-0">
                                Recommended Dimensions: <br>
                                520x520 Max fil size: 5MB
                            </p>
                        </div>
                        <div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label for="customFile" class="btn btn-tone btn-primary">
                                    <i class="anticon anticon-cloud-upload m-r-5"></i>
                                    <span>Upload</span>
                                </label>
                            </div>

                        </div>
                    </div>
                    <hr class="m-v-25">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label class="font-weight-semibold" for="userName">Name:</label>
                            <input type="text" class="form-control" id="userName" placeholder="User Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label class="font-weight-semibold" for="userName">Client text:</label>
                            <textarea rows="5" type="text" class="form-control" id="userName" placeholder="User Name"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-primary m-t-30 mr-3">Назад</a>
                            <button class="btn btn-primary m-t-30">
                                <i class="anticon anticon-sync m-r-5"></i>
                                <span>Изменить</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection