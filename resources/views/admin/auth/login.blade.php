@extends('admin.auth.layouts.app')

@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign In To Admin</h3>
        </div>

        <form method="POST" class="kt-form" action='{{ url("admin/login") }}' aria-label="{{ __('Login') }}">
            @csrf
            <div class="input-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>


            <div class="input-group">
                <input class="form-control" type="password" placeholder="Password" name="password">
            </div>

            <div class="row kt-login__extra">
                <div class="col">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="remember"> Remember me
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">Forget Password ?</a>
                </div>
            </div>
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-pill kt-login__btn-primary">
                    {{ __('Login') }}
                </button>
                {{--                <button id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">Sign In</button>--}}
            </div>
        </form>

    </div>
    <div class="kt-login__forgot">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Forgotten Password ?</h3>
            <div class="kt-login__desc">Enter your email to reset your password:</div>
        </div>
        <form class="kt-form" action="">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_forgot_submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                <button id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
            </div>
        </form>
    </div>`
    <div class="kt-login__account">
								<span class="kt-login__account-msg">
									Don't have an account yet ?
								</span>&nbsp;&nbsp;
        <a href="{{ url('/admin/register') }}" class="kt-link kt-link--light kt-login__account-link">Sign Up</a>
    </div>
@endsection
