@extends('_layouts.admin.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Главная</a>
                        <span class="breadcrumb-item active">Бренды</span>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-lg-6">
                            <div class="d-md-flex">
                                <div class="m-b-10">
                                    <select class="custom-select" style="min-width: 180px;">
                                        <option selected>Status</option>
                                        <option value="all">All</option>
                                        <option value="approved">Approved</option>
                                        <option value="pending">Pending</option>
                                        <option value="rejected">Rejected</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary">
                                <i class="anticon anticon-delete m-r-5"></i>
                                <span>Удалить все</span>
                            </button>

                            <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">
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
                                    </th>
                                    <th>Значок бренда</th>
                                    <th>Название бренда</th>
                                    <th>Дата</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="check-item-1" type="checkbox">
                                            <label for="check-item-1" class="m-b-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                @if($brand->img)
                                                <img class="img-fluid rounded" src="{{ asset('storage/uploads/brands/' . $brand->img) }}" style="max-width: 60px" alt="">
                                                @else
                                                <img class="img-fluid rounded" src="{{ asset('assets/admin/images/others/thumb-9.jpg') }}" style="max-width: 60px" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->created_at ?? Date('Y-m-d') }}</td>
                                    <td class="text-right d-flex pt-4">
                                        <a href="{{ route('admin.brands.edit', ['brand' => $brand->id]) }}" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.brands.destroy', ['brand' => $brand->id]) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
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