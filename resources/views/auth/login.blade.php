@extends('layouts.login.layout')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="https://www.lovlin.com/wp-content/uploads/2020/09/logo_lovlin_web_3.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Sign In To Admin</h3>
                            <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
                        </div>
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8  @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                <div class="checkbox-inline">
                                    {{--<label class="checkbox m-0 text-muted">--}}
                                        {{--<input type="checkbox" name="remember" />--}}
                                        {{--<span></span>Remember me</label>--}}
                                </div>
                                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
                            </div>
                            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
                        </form>
                    </div>
                    <div class="login-forgot">
                        <div class="mb-20">
                            <h3>Forgotten Password ?</h3>
                            <div class="text-muted font-weight-bold">Enter your email to reset your password</div>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
                                <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
