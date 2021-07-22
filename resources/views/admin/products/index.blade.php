@extends('_layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Главная</a>
                        <span class="breadcrumb-item active">Продукты</span>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-lg-6">
                            <div class="d-md-flex text-right">
                                <div class="m-b-10 m-r-15">
                                    <select class="custom-select" style="min-width: 180px;">
                                        <option selected>Catergory</option>
                                        <option value="all">All</option>
                                        <option value="homeDeco">Home Decoration</option>
                                        <option value="eletronic">Eletronic</option>
                                        <option value="jewellery">Jewellery</option>
                                    </select>
                                </div>
                                <div class="m-b-10">
                                    <select class="custom-select" style="min-width: 180px;">
                                        <option selected>Status</option>
                                        <option value="all">All</option>
                                        <option value="inStock">In Stock </option>
                                        <option value="outOfStock">Out of Stock</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary">
                                <i class="anticon anticon-delete m-r-5"></i>
                                <span>Удалить все</span>
                            </button>

                            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                                <i class="anticon anticon-plus m-r-5"></i>
                                <span>Создать</span>
                            </a>
                        </div>
                    </div>

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
                                    <th>Изображений</th>
                                    <th>Продукты</th>
                                    <th>Категория</th>
                                    <th>Цена</th>
                                    <th>Осталось на складе</th>
                                    <th>Статус</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                @foreach($product->category as $category)
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="check-item-1" type="checkbox">
                                            <label for="check-item-1" class="m-b-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($product->product_img)
                                            <img class="img-fluid rounded" src="{{ asset('storage/uploads/products/' . $product->product_img) }}" style="max-width: 60px" alt="">
                                            @else
                                            <img class="img-fluid rounded" src="{{ asset('assets/admin/images/others/thumb-9.jpg') }}" style="max-width: 60px" alt="">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="m-b-0 m-l-10" style="max-width: 240px;">{{ $product->product_name }}</h6>
                                    </td>
                                    <td>{{ $category->sub_category_name }}</td>
                                    <td>{{ $product->product_price }} сомон</td>
                                    <td>20</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-success badge-dot m-r-10"></div>
                                            <div>In Stock</div>
                                        </div>
                                    </td>
                                    <td class="text-right d-flex">
                                        <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        <div class="m-t-30">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Предыдущий</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Следующий</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection