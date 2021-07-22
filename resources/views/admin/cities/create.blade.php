@extends('_layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <a class="breadcrumb-item" href="#">Cities</a>
                <span class="breadcrumb-item active">Create city</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <form method="post" action="{{ route('admin.cities.store') }}" class="card-body">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">Country</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
                <div class="form-group col-md-6">
                    <label class="font-weight-semibold" for="userName">City Name</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-primary m-t-30 mr-3">Назад</a>
                    <button class="btn btn-primary m-t-30">
                        <i class="anticon anticon-plus m-r-5"></i>
                        <span>Создать</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection