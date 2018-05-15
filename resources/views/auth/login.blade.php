@extends('layouts.app')

@section('content')

<div class="ui grid padded centered middle aligned login-page">
    <div class="five wide column no-padding ">
        <div class="ui raised card login-container">        
            <div class="content login">
                <h3 class="ui dividing header login__title"> Login </h3>                
                <div class="description login__content">
                    <form class="ui form" method="POST" action="{{ route('login') }}">
                        @csrf
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
                                <i class="key icon"></i>
                                <input type="password" name="password" placeholder="Password" value={{ old('password') ?? '' }}>
                            </div>
                            @if ($errors->has('password'))
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('password') }}
                                </div>                             
                            @endif
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" name="remember" tabindex="0" {{ old('remember') ? 'checked' : '' }}>
                                <label>Remember me</label>
                            </div>                        
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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
@endsection
