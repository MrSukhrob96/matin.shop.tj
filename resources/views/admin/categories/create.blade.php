@extends('_layouts.admin.app')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="page-header pb-3">
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Categories</a>
                    <span class="breadcrumb-item active">Create Category</span>
                </nav>
            </div>
        </div>
    </div>
    <form>
        <div class="page-header no-gutters has-tab">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Создать категория</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-edit-option">Создать подкатегория</a>
                </li>
            </ul>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                            </div>
                            <div class="m-l-20 m-r-20">
                                <h5 class="m-b-5 font-size-18">Upload Category Image</h5>
                                <p class="opacity-07 font-size-13 m-b-0">
                                    Recommended Dimensions: <br>
                                    320x320 Max fil size: 5MB
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
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="userName">Категория Name:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="language">Подкатегория</label>
                                    <select id="language" class="form-control">
                                        <option>Category product</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label class="font-weight-semibold" for="userName">Описание категория :</label>
                                    <textarea rows="5" type="text" class="form-control" id="userName" placeholder="User Name"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 text-right">
                                    <button class="btn btn-outline-primary m-t-30 mr-3">Назад</button>
                                    <button class="btn btn-primary m-t-30">
                                        <i class="anticon anticon-plus m-r-5"></i>
                                        <span>Добавить</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="product-edit-option">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                            </div>
                            <div class="m-l-20 m-r-20">
                                <h5 class="m-b-5 font-size-18">Upload Category Image</h5>
                                <p class="opacity-07 font-size-13 m-b-0">
                                    Recommended Dimensions: <br>
                                    320x320 Max fil size: 5MB
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
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="userName">Категория Name:</label>
                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-semibold" for="language">Подкатегория</label>
                                    <select id="language" class="form-control">
                                        <option>Category product</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label class="font-weight-semibold" for="userName">Описание категория :</label>
                                    <textarea rows="5" type="text" class="form-control" id="userName" placeholder="User Name"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 text-right">
                                    <button class="btn btn-outline-primary m-t-30 mr-3">Назад</button>
                                    <button class="btn btn-primary m-t-30">
                                        <i class="anticon anticon-plus m-r-5"></i>
                                        <span>Добавить</span>
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