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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">List Order Team</h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="row p-0  mt-n20 mb-n20">
                                <div class="col-lg-12 col-xxl-12 ">
                                    <div class="card-spacer gutter-b">
                                        <div class="card-body d-flex flex-column">
                                            <div class=" row d-flex align-items-center justify-content-between flex-grow-1">
                                                <div class="col-lg-3 bg-warning px-6 py-8 rounded-xl mb-2">
                                                    <div class="row">
                                                        <div class="col-4">
                                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                                            <i class="fas fa-chart-pie fa-3x text-white"></i>
                                                        </span>
                                                            <a href="#" class="text-white font-weight-bold font-size-h6">Weekly</a>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="font-weight-boldest font-size-h3 text-white">RM 430,154.48</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 bg-primary px-6 py-8 rounded-xl mb-2">
                                                    <div class="row">
                                                        <div class="col-4">
                                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                                            <i class="fas fa-chart-pie fa-3x text-white"></i>
                                                        </span>
                                                            <a href="#" class="text-white font-weight-bold font-size-h6">Month</a>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="font-weight-boldest font-size-h3 text-white">RM 781,667.31</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 bg-dark px-6 py-8 rounded-xl mb-2">
                                                    <div class="row">
                                                        <div class="col-4">
                                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                                            <i class="fas fa-chart-pie fa-3x text-white"></i>
                                                        </span>
                                                            <a href="#" class="text-white font-weight-bold font-size-h6">Year</a>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="font-weight-boldest font-size-h3 text-white">RM 13,618,643.11</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 bg-success px-6 py-8 rounded-xl  mb-2">
                                                    <div class="row">
                                                        <div class="col-4">
                                                        <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                                                            <i class="fas fa-chart-pie fa-3x text-white"></i>
                                                        </span>
                                                            <a href="#" class="text-white font-weight-bold font-size-h6">Total</a>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="font-weight-boldest font-size-h3 text-white">RM 13,618,643.11</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xxl-12">
                                    <div class="card card-custom">
                                        <div class="card-header flex-wrap py-5">
                                            <div class="card-title">
                                                <h3 class="card-label">Deleted Order
                                                    <span class="d-block text-muted pt-2 font-size-sm">List of Deleted Order</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Buyer</th>
                                                    <th>Seller</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>17114</td>
                                                    <td>AMIRA BINTI AMSIR</td>
                                                    <td>NOR FAZIRA BINTI ISHAK</td>
                                                    <td>2020-10-07</td>
                                                    <td>Pending Payment</td>
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
                                                    <td>17112</td>
                                                    <td>LISMA LANIKA ERFHA JACK</td>
                                                    <td>ELIANA WYNNA ARANG</td>
                                                    <td>2020-10-07</td>
                                                    <td>Pending Payment</td>
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
                                                    <td>17109</td>
                                                    <td>WIDYAWATI BT ISHAK</td>
                                                    <td>SITI MASILAH BINTI RAKMAD</td>
                                                    <td>2020-10-07</td>
                                                    <td>Pending Payment</td>
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
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
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
