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
                    <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Все категорие</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-edit-option">Все подкатегория</a>
                </li>
            </ul>
        </div>
        <div class="tab-content m-t-15">
            <div class="tab-pane fade show active" id="product-edit-basic">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-md-flex text-right">
                                    <div class="m-r-15">
                                        <select class="custom-select" style="min-width: 180px;">
                                            <option selected></option>
                                            <option value="all">All</option>
                                            <option value="homeDeco">Home Decoration</option>
                                            <option value="eletronic">Eletronic</option>
                                            <option value="jewellery">Jewellery</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <button class="btn btn-primary">
                                    <i class="anticon anticon-delete  m-r-5"></i>
                                    <span>Удалить все</span>
                                </button>

                                <button class="btn btn-primary">
                                    <i class="anticon anticon-plus m-r-5"></i>
                                    <span>Создать</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover e-commerce-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input id="checkAll" type="checkbox">
                                            <label for="checkAll" class="m-b-0"></label>
                                        </div>
                                    </th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock Left</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="check-item-1" type="checkbox">
                                            <label for="check-item-1" class="m-b-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg" style="max-width: 60px" alt="">
                                            <h6 class="m-b-0 m-l-10">Gray Sofa</h6>
                                        </div>
                                    </td>
                                    <td>Home Decoration</td>
                                    <td>$912.00</td>
                                    <td>20</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-success badge-dot m-r-10"></div>
                                            <div>In Stock</div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="m-t-30 p-b-30">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="product-edit-option">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-md-flex text-right">
                                    <div class="m-r-15">
                                        <select class="custom-select" style="min-width: 180px;">
                                            <option selected></option>
                                            <option value="all">All</option>
                                            <option value="homeDeco">Home Decoration</option>
                                            <option value="eletronic">Eletronic</option>
                                            <option value="jewellery">Jewellery</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <button class="btn btn-primary">
                                    <i class="anticon anticon-delete  m-r-5"></i>
                                    <span>Удалить все</span>
                                </button>

                                <button class="btn btn-primary">
                                    <i class="anticon anticon-plus m-r-5"></i>
                                    <span>Создать</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover e-commerce-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <input id="checkAll" type="checkbox">
                                            <label for="checkAll" class="m-b-0"></label>
                                        </div>
                                    </th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock Left</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="check-item-1" type="checkbox">
                                            <label for="check-item-1" class="m-b-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg" style="max-width: 60px" alt="">
                                            <h6 class="m-b-0 m-l-10">Gray Sofa</h6>
                                        </div>
                                    </td>
                                    <td>Home Decoration</td>
                                    <td>$912.00</td>
                                    <td>20</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-success badge-dot m-r-10"></div>
                                            <div>In Stock</div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="m-t-30 p-b-30">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@ensection