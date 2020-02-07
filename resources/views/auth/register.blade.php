@extends('layouts.app')

@section('content')
<div class='reg_wrapper'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="reg_header">{{ 'создать аккаунт' }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror reg_input" name="name" value="{{ old('name') }}" placeholder='Имя' required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror reg_input" name="email" value="{{ old('email') }}" placeholder='Эл. Почта' required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror reg_input" name="password" placeholder='Пароль' required >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <input id="password-confirm" type="password" class="form-control reg_input" name="password_confirmation" placeholder='Повторить Пароль' required >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary reg_btn">регистрация</button>
                            </div>
                        </div>
                    </form>
                <div class='have_account'>
                    <span>Уже есть аккаунт ?</span> | 
                    <a href="{{route('login')}}">войти</a>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
