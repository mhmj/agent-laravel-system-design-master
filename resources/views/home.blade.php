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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
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
                                <div class="col-lg-12 order-2 order-xxl-12">
                                    <div class="card card-custom card-stretch gutter-b">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Latest Transactions</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">List Latest Transactions</span>
                                            </h3>
                                        </div>
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables11">
                                                <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                            <tr>
                                                                <th class="p-0 w-40px"></th>
                                                                <th class="p-0 min-w-200px"></th>
                                                                <th class="p-0 min-w-100px"></th>
                                                                <th class="p-0 min-w-125px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="pl-0 py-4">
                                                                    <div class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                    </div>
                                                                </td>
                                                                <td class="pl-0">
                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                    <div>
                                                                        <span class="font-weight-bolder">Email:</span>
                                                                        <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td class="text-right">
                                                                    <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                </td>
                                                                <td class="text-right">
                                                                    <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                </td>
                                                                <td class="text-right pr-0">
                                                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                    <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                    <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                </g>
                                                                            </svg>
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
                            <div class="row">
                                <div class="col-lg-12 col-xxl-12">
                                    <div class="card card-custom card-stretch gutter-b">
                                        <div class="card-header border-0 py-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Agent</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Lists of Agent</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>
                                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 pb-3">
                                            <div class="tab-content">
                                                <div class="table-responsive">
                                                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                        <thead>
                                                        <tr class="text-left text-uppercase">
                                                            <th style="min-width: 250px" class="pl-7">
                                                                <span class="text-dark-75">products</span>
                                                            </th>
                                                            <th style="min-width: 100px">earnings</th>
                                                            <th style="min-width: 100px">comission</th>
                                                            <th style="min-width: 100px">company</th>
                                                            <th style="min-width: 130px">rating</th>
                                                            <th style="min-width: 80px"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-8">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                                            </span>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                                        <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                                                <span class="text-muted font-weight-bold">In Proccess</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                                <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                            </td>
                                                            <td>
                                                                <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />
                                                                <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                                            </td>
                                                            <td class="pr-0 text-right">
                                                                <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
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
    {{--<div class="col-xl-6 col-xxl-6">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xl-4">--}}
                {{--<div class="card card-custom bg-success gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-white">--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">14</span>--}}
                        {{--<span class="font-weight-bold font-size-sm text-white">Alpha</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card card-custom bg-light-success gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-dark">--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 d-block">14</span>--}}
                        {{--<span class="font-weight-bold font-size-sm">Mini Stokis</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-4">--}}
                {{--<div class="card card-custom bg-warning gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-white">--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">30</span>--}}
                        {{--<span class="font-weight-bold font-size-sm text-white">Leader</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card card-custom bg-light-warning gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-dark">--}}
													{{--<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
                                                    {{--<!--end::Svg Icon-->--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 d-block">1500</span>--}}
                        {{--<span class="font-weight-bold font-size-sm">Master Agent</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-4">--}}
                {{--<div class="card card-custom bg-info gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-white">--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">100</span>--}}
                        {{--<span class="font-weight-bold font-size-sm text-white">Stokis</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="card card-custom bg-light-info gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-dark">--}}
													{{--<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
                                                    {{--<!--end::Svg Icon-->--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 d-block">3000</span>--}}
                        {{--<span class="font-weight-bold font-size-sm">Agent</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-xl-5">--}}
                {{--<div class="card card-custom bg-dark gutter-b">--}}
                    {{--<div class="card-body">--}}
												{{--<span class="svg-icon svg-icon-2x svg-icon-white">--}}
													{{--<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->--}}
													{{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
														{{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
															{{--<polygon points="0 0 24 0 24 24 0 24" />--}}
															{{--<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
															{{--<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
														{{--</g>--}}
													{{--</svg>--}}
                                                    {{--<!--end::Svg Icon-->--}}
												{{--</span>--}}
                        {{--<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block">6000</span>--}}
                        {{--<span class="font-weight-bold font-size-sm text-white">Mini Agent</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-7">--}}
                {{--<div class="card card-custom bgi-no-repeat gutter-b" style="height: 175px; background-color: #4AB58E; background-position: calc(100% + 1rem) bottom; background-size: 25% auto; background-image: url(assets/media/svg/humans/custom-1.svg)">--}}
                    {{--<div class="card-body d-flex align-items-center">--}}
                        {{--<div class="py-2">--}}
                            {{--<h3 class="text-white font-weight-bolder mb-3">Total</h3>--}}
                            {{--<p class="text-white font-size-lg">3000</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
@endsection
