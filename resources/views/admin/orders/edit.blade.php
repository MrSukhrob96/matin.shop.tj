@extends('_layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header pb-3">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Orders</a>
                    <span class="breadcrumb-item active">Edit Order</span>
                </nav>
            </div>
        </div>
    </div>
    <form>
        <div class="page-header no-gutters has-tab">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Order</a>
                </li>
            </ul>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                <img src="{{ asset('assets/admin/images/avatars/thumb-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <hr class="m-v-25">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label class="font-weight-semibold" for="userName">User FIO:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-semibold" for="userName">Cout order:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-semibold" for="userName">Product price:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-semibold" for="userName">Total price:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="font-weight-semibold" for="language">Status order</label>
                                    <select id="language" class="form-control">
                                        <option>order status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 text-right">
                                    <button class="btn btn-outline-primary m-t-30 mr-3">Назад</button>
                                    <button class="btn btn-primary m-t-30">Отказать</button>
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
    </form>
</div>

@endsection