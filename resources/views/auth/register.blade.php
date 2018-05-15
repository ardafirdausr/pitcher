@extends('layouts.app')

@section('content')

<div class="ui grid padded centered middle aligned register-page">    
    <div class="six wide column no-padding ">
        <div class="ui card register-container">        
            <div class="content register">                             
                <div class="ui dividing header register__title">Register</div>
                <div class="description register__content">
                    <form class="ui form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field {{ $errors->has('name') ? 'error' : ''}}">
                                <label>Nama</label>
                                <div class="ui left icon action input">
                                    <i class="user circle icon"></i>
                                    <input type="text" name="name" placeholder="Name" value={{ old('name') ?? '' }}>                            
                                </div>
                                @if ($errors->has('name'))                                                                        
                                    <div class="ui pointing red basic label">
                                        {{ $errors->first('name') }}
                                    </div>                                    
                                @endif                                                                                                                                                 
                        </div>
                        <div class="field {{ $errors->has('email') ? 'error' : ''}}">
                            <label>Email</label>
                            <div class="ui left icon action input">
                                <i class="envelope icon"></i>
                                <input type="email" name="email" placeholder="Email" value={{ old('email') ?? '' }}>                            
                            </div>
                            @if ($errors->has('email'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('email') }}
                                </div>                                    
                            @endif                                                                                                                                                 
                        </div>
                        <div class="field {{ $errors->has('password') ? 'error' : ''}}">
                            <label>Password</label>
                            <div class="ui left icon action input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('password') }}
                                </div>                             
                            @endif
                        </div>
                        <div class="field {{ $errors->has('password_confirmation') ? 'error' : ''}}">
                                <label>Password Confirmation</label>
                                <div class="ui left icon action input">
                                    <i class="lock icon"></i>                                    
                                    <input type="password" name="password_confirmation" placeholder="Password"}}>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div class="ui pointing red basic label">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>                             
                                @endif
                        </div>                        
                        <input class="ui right floated button blue" type="submit" value="submit"></input>
                    </form>            
                </div>            
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
