@extends('layouts.app')

@section('content')
<div class='login_wrapper'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="log_header">вход</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror reg_input" name="email" value="{{ old('email') }}" placeholder='Эл. Почта' required  autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror reg_input" name="password" placeholder='Пароль' required >
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link reset_link" href="{{ route('password.request') }}">
                                        {{ 'забыли ?' }}
                                    </a>
                                @endif
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary reg_btn log_sub">логин</button>                             
                            </div>
                        </div>
                    </form>
                    <div class='have_account'>
                        <span>Нет аккаунта ?</span> | 
                        <a href="{{route('register')}}">создать аккаунт</a>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection
