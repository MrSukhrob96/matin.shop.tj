@extends('_layouts.admin.app')

@section('content')

<div class="main-content">
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <a class="breadcrumb-item" href="#">Users</a>
                <span class="breadcrumb-item active">Edit User</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <form class="card-body" method="post" action="{{ route('admin.users.update', ['user' => 1]) }}">
            @csrf
            @method('PUT')
            <div class="media align-items-center">
                <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                    <img src="{{ asset('assets/admin/images/avatars/thumb-3.jpg') }}" alt="">
                </div>
                <div class="m-l-20 m-r-20">
                    <h5 class="m-b-5 font-size-18">Upload Avatar</h5>
                    <p class="opacity-07 font-size-13 m-b-0">
                        Recommended Dimensions: <br>
                        128x128 Max fil size: 5MB
                    </p>
                </div>
                <div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label for="customFile" class="btn btn-tone btn-primary">
                            <i class="anticon anticon-cloud-upload"></i>
                            <span>Upload</span>
                        </label>
                    </div>

                </div>
            </div>
            <hr class="m-v-25">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">Name</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">Surname</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="font-weight-semibold" for="userName">Email</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-semibold" for="userName">Phone</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
                <div class="form-group col-md-4">
                    <label class="font-weight-semibold" for="language">Role user</label>
                    <select id="language" class="form-control">
                        <option>type news</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">Password</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">Password confirmed</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-primary m-t-30 mr-3">??????????</a>
                    <button class="btn btn-primary m-t-30">
                        <i class="anticon anticon-sync m-r-5"></i>
                        <span>????????????????</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection