@extends('layouts.dashboard.layout')

@section('content')
    @include('layouts.others.mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('menus.menu')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('menus.top-bar')
            <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Roles</h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-xxl-12">
                                    <div class="card card-custom">
                                        <div class="card-header flex-wrap py-5">
                                            <div class="card-title">
                                                <h3 class="card-label">Roles
                                                    <span class="d-block text-muted pt-2 font-size-sm">List of Roles</span>
                                                </h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-sm btn-primary font-weight-bold">
                                                    <i class="fas fa-map-signs"></i> New Territory
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Display Name</th>
                                                    <th>Level</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Agent 1</td>
                                                    <td>Partner</td>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-primary fas fa-pencil-alt"></i>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-danger far fa-trash-alt"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Agent 2</td>
                                                    <td>Distributor</td>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-primary fas fa-pencil-alt"></i>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-danger far fa-trash-alt"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Agent 3</td>
                                                    <td>Entrepreneur</td>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-primary fas fa-pencil-alt"></i>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-danger far fa-trash-alt"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer bg-white py-10 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2020©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Lovlin</a>
                        </div>
                        <div class="nav nav-dark">
                            <a href="#" target="_blank" class="nav-link pl-0 pr-5">FAQ</a>
                            <a href="#" target="_blank" class="nav-link pl-0 pr-5">Terms & Conditions</a>
                            <a href="#" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
