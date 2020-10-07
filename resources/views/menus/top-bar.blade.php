<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <ul class="menu-nav"></ul>
            </div>
        </div>
        <div class="topbar">
        @if(Auth::user()->email_verified_at != '')
            <!--begin::Search-->
            <div class="dropdown" id="kt_quick_search_toggle">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                        <!--begin:Form-->
                        <form method="get" class="quick-search-form">
                            <div class="input-group">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search..." />
                                <div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Scroll-->
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                        <!--end::Scroll-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Search-->
            <!--begin::Cart-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_cart_toggle">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                </div>
            </div>
        @endif
            <!--end::Cart-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ ucfirst(trans(Auth::user()->name )) }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">
                            {{
                            substr( ucfirst(trans(Auth::user()->name )), 0, 1)
                            }}
                        </span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
    </div>
</div>

<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
            <small class="text-muted font-size-sm ml-2"></small></h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    {{ucfirst(trans(Auth::user()->name))}}
                </a>
                <div class="text-muted mt-1">Alpha</div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{Auth::user()->email}}</span>
								</span>
                    </a>
                    <a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Sign out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Profile</div>
                        <div class="text-muted">Account settings and more</div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-warning">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
												<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
												<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
												<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Order</div>
                        <div class="text-muted">List Order</div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
<!--begin::Quick Cart-->
<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0">Shopping Cart</h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <div class="offcanvas-wrapper mb-5 scroll-pull">
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                    <span class="text-muted">The best kitchen gadget in 2020</span>
                    <div class="d-flex align-items-center mt-2">
                        <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                        <span class="text-muted mr-1">for</span>
                        <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                            <i class="ki ki-minus icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon">
                            <i class="ki ki-plus icon-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
                </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                    <span class="text-muted">Smart tool for cooking</span>
                    <div class="d-flex align-items-center mt-2">
                        <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                        <span class="text-muted mr-1">for</span>
                        <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                            <i class="ki ki-minus icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon">
                            <i class="ki ki-plus icon-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
                </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                    <span class="text-muted">Professional camera for edge cutting shots</span>
                    <div class="d-flex align-items-center mt-2">
                        <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                        <span class="text-muted mr-1">for</span>
                        <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                            <i class="ki ki-minus icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon">
                            <i class="ki ki-plus icon-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
                </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                    <span class="text-muted">Manufactoring unique objects</span>
                    <div class="d-flex align-items-center mt-2">
                        <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                        <span class="text-muted mr-1">for</span>
                        <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                            <i class="ki ki-minus icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon">
                            <i class="ki ki-plus icon-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
                </a>
            </div>
            <!--end::Item-->
            <!--begin::Separator-->
            <div class="separator separator-solid"></div>
            <!--end::Separator-->
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                    <span class="text-muted">Perfect animation tool</span>
                    <div class="d-flex align-items-center mt-2">
                        <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                        <span class="text-muted mr-1">for</span>
                        <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                            <i class="ki ki-minus icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-light-success btn-icon">
                            <i class="ki ki-plus icon-xs"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="symbol symbol-70 flex-shrink-0">
                    <img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
                </a>
            </div>
            <!--end::Item-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Purchase-->
        <div class="offcanvas-footer">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-7">
                <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                <span class="font-weight-bolder text-primary text-right">$5640.00</span>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
            </div>
        </div>
        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>
<!--end::Quick Cart-->
<!--begin::Chat Panel-->
<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header align-items-center px-4 py-3">
                    <div class="text-left flex-grow-1">
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
                                            <span class="navi-text">New Group</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
                                            <span class="navi-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
                                            <span class="navi-text">Groups</span>
                                            <span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                            <span class="navi-text">Calls</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                            <span class="navi-text">Privacy</span>
                                            <span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <div class="text-center flex-grow-1">
                        <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                        <div>
                            <span class="label label-dot label-success"></span>
                            <span class="font-weight-bold text-muted font-size-sm">Active</span>
                        </div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Scroll-->
                    <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                        <!--begin::Messages-->
                        <div class="messages">
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">2 Hours</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">3 minutes</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                                    <a href="#">https://github.com</a></div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                            </div>
                            <!--end::Message Out-->
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer align-items-center">
                    <!--begin::Compose-->
                    <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="mr-3">
                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                <i class="flaticon2-photograph icon-lg"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon btn-md">
                                <i class="flaticon2-photo-camera icon-lg"></i>
                            </a>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                        </div>
                    </div>
                    <!--begin::Compose-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>
<!--end::Chat Panel-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
</div>
<!--end::Scrolltop-->
<!--begin::Sticky Toolbar-->
<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
    <!--begin::Item-->
    <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
            <i class="flaticon2-drop"></i>
        </a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/demo1/builder.html" target="_blank">
            <i class="flaticon2-gear"></i>
        </a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
            <i class="flaticon2-telegram-logo"></i>
        </a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
        <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
            <i class="flaticon2-chat-1"></i>
        </a>
    </li>
    <!--end::Item-->
</ul>
<!--end::Sticky Toolbar-->