@extends('layouts.app')

@section('content')
    <div class="ui grid container centered middle aligned profile-show-page">
        <div class="ui sixteen wide column raised segment profile-show-container">
            <div class="ui grid padded">                 
                <div class="two wide column">
                    <img class="ui small circular image" src="{{ asset('uploads/avatar/user.png') }}">
                </div>
                <div class="twelve wide column">                                                                
                    <h3 class="ui dividing header"> 
                        {{ $userData->name ?? 'No name for this user'}} 
                    </h3>                    
                    <div class=""> Identitas Pengguna digunakan sebagai identitas pembayaran </div>
                </div>
                <div class="sixteen wide column">
                    <div class="ui segments">
                        <div class="ui segment">
                            <p>Nomor Induk Kependudukan</p>
                        </div>
                        <div class="ui secondary segment">
                            <p>{{ $userIdentity->nik ?? 'Belum ada data NIK' }}</p>
                        </div>
                    </div>  
                    <div class="ui segments">
                        <div class="ui segment">
                            <p>Nama Bank</p>
                        </div>
                        <div class="ui secondary segment">
                            <p>{{ $userIdentity->nama_bank ?? 'Belum ada data Nama Bank' }}</p>
                        </div>
                    </div>                                       
                    <div class="ui segments">
                        <div class="ui segment">
                            <p>Nomor Rekening</p>
                        </div>
                        <div class="ui secondary segment">
                            <p>{{ $userIdentity->nomor_rekening ?? 'Belum ada data Nomor Rekening' }}</p>
                        </div>
                    </div>  
                    <div class="ui segments">
                        <div class="ui segment">
                            <p>Nama Pemiliki Rekening</p>
                        </div>
                        <div class="ui secondary segment">
                            <p>{{ $userIdentity->pemilik_rekening ?? 'Belum ada data Nama Pemilik Rekening' }}</p>
                        </div>
                    </div>                      
                    @if(Auth::user()->id == $id)                        
                        <div class="ui right floated teal button clickable" onclick='window.location.href = "{{route('user.identity.edit', ['id' => Auth::user()->id])}}"'>                            
                            Edit Identitas
                            <i class="edit"></i>                            
                        </div>
                    @endif                                        
                </div>                                
            </div>            
        </div>
    </div> 
@endsection