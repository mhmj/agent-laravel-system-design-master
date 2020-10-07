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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Add Product</h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="card card-custom">
                                <div class="card-body p-0">
                                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                                        <div class="wizard-nav">
                                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>1.</span>Product Details</h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>2.</span>Price</h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">
                                                            <span>3.</span>MOQ</h3>
                                                        <div class="wizard-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10 mt-n10">
                                            <div class="col-xl-12 col-xxl-7">
                                                <form class="form" id="kt_form">
                                                    <div class="" data-wizard-type="step-content" data-wizard-state="current">
                                                        <h4 class="mb-5 font-weight-bold text-dark">Register your new product</h4>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="Name"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="Category"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="Description"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Package Item (Starter Pack)</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="Package Item (Starter Pack)"/>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Weight</label>
                                                                    <input type="text" class="form-control" name="address2" placeholder="Weight"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Stock</label>
                                                                    <input type="text" class="form-control" name="address2" placeholder="Stock"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Stock Alert</label>
                                                                    <input type="text" class="form-control" name="address2" placeholder="Stock Alert"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Retail</label>
                                                                    <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="form-group">
                                                                    <label>File Browser</label>
                                                                    <div></div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="customFile"/>
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="" data-wizard-type="step-content">
                                                        <h4 class="mb-5 font-weight-bold text-dark">Enter the Agent Price</h4>
                                                        <div class="form-group">
                                                            <label>Agent 1</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 2</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 3</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 4</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 5</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 6</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 7</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 8</label>
                                                            <input type="text" class="form-control" name="address2" placeholder="RM"/>
                                                        </div>
                                                    </div>
                                                    <div class="" data-wizard-type="step-content">
                                                        <h4 class="mb-5 font-weight-bold text-dark">Enter Minimum Order</h4>
                                                        <div class="form-group">
                                                            <label>Agent 1</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 2</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 3</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 4</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 5</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 6</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 7</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agent 8</label>
                                                            <input type="text" class="form-control" name="address2" placeholder=""/>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-top mt-3 pt-3">
                                                        <div class="mr-2">
                                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                            <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                                        </div>
                                                    </div>
                                                </form>
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
