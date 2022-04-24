@extends('layouts.app')
@section('title')
    Авторизация
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card shadowmy" >
                <div class="card-header text-center fs-3">{{ __('Авторизация') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4">
                            <div class="col-md-6 m-auto">
                                <input id="email" type="email" class="rounded-pill pt-3 pb-3 form-control @error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 m-auto">
                                <input id="password" type="password" class="rounded-pill pt-3 pb-3 form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="col-md-6 offset-md-3">
                                <a class="link-dark" href="{{ route('register') }}">Регистрация</a>
                            </div>
                            </div>


                        <div class="row mb-4">
                            <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-front w-100 fs-2">
                                Войти
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
