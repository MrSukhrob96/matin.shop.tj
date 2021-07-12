@extends('_layouts.admin.app')

@section('content')

<div class="main-content">
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                <span class="breadcrumb-item active">Users</span>
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

                    <button class="btn btn-primary">
                        <i class="anticon anticon-plus m-r-5"></i>
                        <span>Создать</span>
                    </button>
                </div>
            </div>

            <div class="m-t-25">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
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
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-right">
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                    <i class="anticon anticon-edit"></i>
                                </button>
                                <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                    <i class="anticon anticon-delete"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <input id="check-item-2" type="checkbox">
                                    <label for="check-item-2" class="m-b-0"></label>
                                </div>
                            </td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
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

                <div class="m-t-30">
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
</div>

@endsection