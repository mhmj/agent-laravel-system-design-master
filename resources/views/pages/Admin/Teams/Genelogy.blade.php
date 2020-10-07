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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Genelogy</h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-xxl-12">
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Alpha1">
                                                    Level 1 - LV001
                                                </div>
                                            </div>
                                            <div id="Alpha1" class="collapse" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Leader1">
                                                                    Level 2 - LV004
                                                                </div>
                                                            </div>
                                                            <div id="Leader1" class="collapse" data-parent="">
                                                                <div class="card-body">
                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Zombie1">
                                                                                    Level 3 - LV005
                                                                                </div>
                                                                            </div>
                                                                            <div id="Zombie1" class="collapse" data-parent="">
                                                                                <div class="card-body">
                                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                            <div class="card">
                                                                                                <div class="card-header">
                                                                                                    <div class="card-title  collapsed" data-toggle="collapse" data-target="#Stokis1">
                                                                                                        Level 4 - LV0006
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="Stokis1" class="collapse" data-parent="">
                                                                                                    <div class="card-body">
                                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                                            ...
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#Alpha2">
                                                    Level 1 - LV002
                                                </div>
                                            </div>
                                            <div id="Alpha2" class="collapse" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Leader2">
                                                                    Level 2 - LV007
                                                                </div>
                                                            </div>
                                                            <div id="Leader2" class="collapse" data-parent="">
                                                                <div class="card-body">
                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Zombie2">
                                                                                    Level 3 - LV008
                                                                                </div>
                                                                            </div>
                                                                            <div id="Zombie2" class="collapse" data-parent="">
                                                                                <div class="card-body">
                                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                            <div class="card">
                                                                                                <div class="card-header">
                                                                                                    <div class="card-title  collapsed" data-toggle="collapse" data-target="#Stokis2">
                                                                                                        Level 4 - LV009
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="Stokis2" class="collapse" data-parent="">
                                                                                                    <div class="card-body">
                                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                                            ...
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#Alpha3">
                                                    Level 1 - LV003
                                                </div>
                                            </div>
                                            <div id="Alpha3" class="collapse" data-parent="#accordionExample1">
                                                <div class="card-body">
                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Leader3">
                                                                    Level 2 - LV010
                                                                </div>
                                                            </div>
                                                            <div id="Leader3" class="collapse" data-parent="">
                                                                <div class="card-body">
                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <div class="card-title  collapsed" data-toggle="collapse" data-target="#Zombie3">
                                                                                    Level 3 - LV011
                                                                                </div>
                                                                            </div>
                                                                            <div id="Zombie3" class="collapse" data-parent="">
                                                                                <div class="card-body">
                                                                                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                            <div class="card">
                                                                                                <div class="card-header">
                                                                                                    <div class="card-title  collapsed" data-toggle="collapse" data-target="#Stokis3">
                                                                                                        Level 4 - LV012
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="Stokis3" class="collapse" data-parent="">
                                                                                                    <div class="card-body">
                                                                                                        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                                                                                                            ...
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
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
