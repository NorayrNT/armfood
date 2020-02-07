@extends('layouts.app')

@section('content')
<div class='reset_wrapper'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="reset_header">восстановить пароль</div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <div class="col-12 col-md-6 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror reg_input" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror reg_input" name="password" required >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class=" col-12 col-md-6">
                                <input id="password-confirm" type="password" class="form-control reg_input" name="password_confirmation" required >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
