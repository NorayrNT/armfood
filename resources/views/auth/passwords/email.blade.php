@extends('layouts.app')

@section('content')
<div class='email_wrapper'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="email_header">восстановить пароль</div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="/">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror reg_input" placeholder='Эл. Почта' name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary reg_btn">
                                восстановить пароль
                            </button>
                        </div>
                    </div>
                </form>               
            </div>
        </div>
    </div>
</div>
@endsection
