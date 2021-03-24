@extends('layouts.app')

@section('content')
<div class="container">
<div class="card-header" style="font-size: 20px; text-align: center;">{{ __('Crear Cuenta') }}</div>
<br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" border-radius:30px; ">
                <!--<div class="card-header">{{ __('Formulario de Registro') }}</div>-->
                

                <div class="card-body" style="border-radius:30px; box-shadow:gray 6px 6px 6px 6px">
                <div class="card-body" style=" border-radius:10px; ">
                <h3 style="text-align: center;">Ingrese datos:</h3><br><br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><img src="https://img.icons8.com/ios-glyphs/24/000000/user--v1.png"/></label>

                            <div class="col-md-6">
                            
                                <input pattern="[0-9-a-zA-Z]+" id="name" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><img src="https://img.icons8.com/ios-filled/24/000000/email.png"/></label>

                            <div class="col-md-6">
                                <input pattern="[0-9-a-zA-Z-@.]+" id="email" placeholder="E-Mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><img style="width: 2rem;" src="https://img.icons8.com/material-sharp/50/000000/password1.png"/></label>

                            <div class="col-md-6">
                                <input pattern="[0-9-a-zA-Z]+" id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><img style="width: 2rem;" src="https://img.icons8.com/material-sharp/50/000000/password1.png"/></label>

                            <div class="col-md-6">
                                <input pattern="[0-9-a-zA-Z]+" id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
