@extends('layouts.app')

@section('content')
<div class="ui grid padded centered middle aligned user-edit-page">
        <div class="ui ten wide column raised segment">
            <div class="twelve wide column user-edit-container">    
                <form class="ui form" method="POST" action=" {{ route('user.update', ['id' => Auth::user()->id ]) }} ">
                    @csrf
                    @method('PUT')                    
                    <h4 class="ui dividing header">Ubah Password</h4>
                    <div class="field">
                        <label>Password Lama</label>                
                        <div class="field">
                            <input type="password" name="password">                
                        </div>
                        @if ($errors->has('password'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('password') }}
                            </div>                                    
                        @endif 
                    </div>
                    <div class="field">
                        <label>Password Baru</label>                
                        <div class="field">
                            <input type="password" name="new_password">                
                        </div>
                        @if ($errors->has('new_password'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('new_password') }}
                            </div>                                    
                        @endif 
                    </div>
                    <div class="field">
                        <label>Konfirmasi Password Baru</label>                
                        <div class="field">
                            <input type="password" name="new_password_confirmation">                
                        </div>
                        @if ($errors->has('new_password_confirmation'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('new_password_confirmation') }}
                            </div>                                    
                        @endif 
                    </div> 
                    {{-- @if($message)
                        <div class="ui {{ ($flag == 'success') ? 'success' : 'warning' }} message">
                            <div class="header">Form Completed</div>
                            <p>You're all signed up for the newsletter.</p>
                        </div>                    
                    @endif                   --}}
                    <input type="submit" class="ui right floated  button blue"> 
                </form>            
            </div>                  
        </div>
    </div> 
@endsection