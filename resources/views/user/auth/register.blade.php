@extends('user.auth.layouts.app')

@section('content')

    <div class="kt-login__signup" style="display:block">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign Up</h3>
            <div class="kt-login__desc">Enter your details to create your account:</div>
        </div>
        <form method="POST" class="kt-login__form kt-form" action='{{ url("/register") }}' aria-label="{{ __('Register') }}">
            @csrf

            <div class="input-group">
                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="input-group">
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="input-group">
                <input id="password" placeholder="Password" type="password" class="form-control @error('password')
                    is-invalid @enderror" name="password" required autocomplete="new-password">

            </div>
            <div class="input-group">
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="row kt-login__extra">
                <div class="col kt-align-left">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                        <span></span>
                    </label>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            <div class="kt-login__actions">
                <button type="submit" id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">
                    {{ __('Register') }}
                </button>
              &nbsp;&nbsp;
                <button id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
            </div>
        </form>
    </div>

@endsection
