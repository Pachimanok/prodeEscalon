@extends('layouts.header')
<div class="container register mt-5">
    <div class="row justify-content-center align-middle mt-5">
        <div class="col-md-8">
            <div class="card" style="border:none; background:transparent !important;">
                <div class="card-body">
                    <img src="../../img/logoprodeescalon.png" class="img-fluid" alt="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mx-auto">
                                <input id="name" placeholder="username" type="text" style="border-right: none; border-top:none; border-left:none;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">

                            <div class="col-md-6  mx-auto">
                                <input id="email" placeholder="E-mail" style="border-right: none; border-top:none; border-left:none;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mx-auto">
                                <input id="password" placeholder="Contraseña" style="border-right: none; border-top:none; border-left:none;" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mx-auto">
                                <input id="password-confirm" placeholder="Repetir Contraseña" style="border-right: none; border-top:none; border-left:none;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-6 mx-auto  text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@extends('layouts.footer')
