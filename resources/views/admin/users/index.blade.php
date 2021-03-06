@extends('_layouts.admin.app')

@section('content')

<div class="main-content">
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Главная</a>
                <span class="breadcrumb-item active">Пользователи</span>
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

                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                        <i class="anticon anticon-plus m-r-5"></i>
                        <span>Создать</span>
                    </a>
                </div>
            </div>

            <div class="m-t-25">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Email</th>
                            <th>Телефон номер</th>
                            <th>роль</th>
                            <th>Дата</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-1" type="checkbox">
                                    <label for="check-item-1" class="m-b-0"></label>
                                </div>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->user_role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td class="text-right d-flex">
                                <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                    <i class="anticon anticon-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="post">
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

@endsection