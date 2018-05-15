@extends('layouts.app')

@section('content')
    <div class="ui grid padded centered middle aligned identity-create-page">
        <div class="ui ten wide column raised segment">
            <div class="twelve wide column">    
                <form class="ui form" method="POST" action={{ route('user.identity.update', compact('id')) }}>
                    @csrf   
                    @method('PUT')
                    <h4 class="ui dividing header">Identitas Pengguna</h4>
                    <div class="field">
                        <label>Nomor Induk Kependudukan</label>                
                        <div class="field">
                            <input type="text" name="nik" placeholder="ex: 9902561801980004" value={{ $userIdentity->nik ?? '' }}>                
                        </div>
                        @if ($errors->has('nik'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('nik') }}
                            </div>                                    
                        @endif
                    </div>
                    <div class="field">
                        <label>Nama Bank</label>                
                        <div class="field">
                            <select class="ui fluid dropdown" name="nama_bank">
                                <option value="{{ $userIdentity->nik ?? '' }}">{{ $userIdentity->nama_bank ?? 'Bank' }}</option>
                                <option value="BRI">BRI</option>                        
                                <option value="BNI">BNI</option>                        
                                <option value="BRC">BCA</option>                        
                                <option value="Mandiri">Mandiri</option>                        
                            </select>
                            @if ($errors->has('nama_bank'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('nama_bank') }}
                                </div>                                    
                            @endif
                        </div>
                    </div>  
                    <div class="field">
                        <label>Nomor Rekening</label>                
                        <div class="field">
                            <input type="text" name="nomor_rekening" placeholder="ex: 211347089464428" value={{ $userIdentity->nomor_rekening ?? '' }}>                
                        </div>
                        @if ($errors->has('nomor_rekening'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('nomor_rekening') }}
                            </div>                                    
                        @endif
                    </div>
                    <div class="field">
                        <label>Nama pemiliki Rekening</label>                
                        <div class="field">
                            <input type="text" name="pemilik_rekening" placeholder="ex: Agus Setiabudi" value="{{ $userIdentity->pemilik_rekening ?? '' }}">                
                        </div>
                        @if ($errors->has('pemilik_rekening'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('pemilik_rekening') }}
                            </div>                                    
                        @endif
                    </div>     
                    <input class="ui right floated button blue" type="submit" value="submit"></input>                                
                </form>           
                <button class="ui left floated button clickable" onclick='window.location.href = "{{route('user.identity.show',['id' => $id])}}"'>Cancel</a></button> 
            </div>                  
        </div>
    </div>    
@endsection