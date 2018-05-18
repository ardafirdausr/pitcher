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
                    <h5 class="header"> {{ $rating ?? '' }} </h5>
                    <div class=""> {{ $userProfile->tentang ?? 'No Information about this user' }} </div>
                </div>
                <div class="sixteen wide column">
                    <div class="ui secondary pointing menu">                        
                        <a class="item green active " data-tab="profile-show-one">
                            Tentang
                        </a>
                        <a class="item green" data-tab="profile-show-two">
                            Pengalaman
                        </a>
                        <a class="item green" data-tab="profile-show-three">
                            Bahan Ajar
                        </a>  
                        {{-- <a class="item green" data-tab="profile-show-fourth">
                            Jadwal
                        </a>                         --}}
                    </div>
                    <div class="ui segment">
                        <div class="ui bottom attached tab active" data-tab="profile-show-one">                            
                            <div class="ui relaxed divided animated list">
                                <div class="item">
                                    <i class="mail middle aligned icon"></i>
                                    <div class="content">
                                    <a class="header">Email</a>
                                    <div class="description">{{ $userData->email ?? 'No Information' }}</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="phone middle aligned icon"></i>
                                    <div class="content">
                                    <a class="header">Nomor Telepon</a>
                                    <div class="description">{{ $userProfile->no_telepon ?? 'No Information' }}</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="marker icon"></i>
                                    <div class="content">
                                        <a class="header">Alamat</a>
                                        <div class="description">{{ $userProfile->alamat ?? 'No Information' }}</div>
                                        <div class="list">                                            
                                            <div class="item">
                                                {{-- <i class="folder icon"></i> --}}
                                                <div class="content">
                                                    <span class="header">Kota</span>
                                                    <span class="description">{{ $kotaName ?? 'No Information' }}</span>
                                                </div>
                                            </div>
                                            <div class="item">
                                                {{-- <i class="folder icon"></i> --}}
                                                <div class="content">
                                                    <div class="header">Provinsi</div>
                                                    <div class="description">{{ $provinsiName ?? 'No Information' }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="clipboard middle aligned icon"></i>
                                    <div class="content">
                                    <a class="header">Kota Mengajar</a>
                                    <div class="description">{{ $kotaMengajarName ?? 'No Information' }}</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <i class="venus mars middle aligned icon"></i>
                                    <div class="content">
                                    <a class="header">Jenis Kelamin</a>
                                    <div class="description">{{ $userProfile->jenis_kelamin ?? ''}}</div>
                                    </div>
                                </div>                                
                                <div class="item">
                                    <i class="info middle aligned icon"></i>
                                    <div class="content">
                                    <a class="header">Biodata</a>
                                    <div class="description">{{ $userProfile->biodata ?? 'No Biodata about this user' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui bottom attached tab" data-tab="profile-show-two">
                            No Experience Information 
                        </div>
                        <div class="ui bottom attached tab" data-tab="profile-show-three">
                            <div class="ui bottom attached tab active" data-tab="profile-show-first">                            
                                <div class="ui relaxed divided animated list">
                                    @if($userCourse->first())
                                        @foreach($userCourse as $course)
                                            <div class="item">                                                
                                                <div class="content">
                                                <a class="header">{{ $course->judul }}</a>
                                                <div class="description">{{ $course->category->name }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        No Course Information
                                    @endif
                                </div>  
                            </div>                            
                        </div>
                        {{-- <div class="ui bottom attached tab" data-tab="profile-show-fourth">
                            third
                        </div> --}}
                    </div>                    
                    @if(Auth::user()->id == $id)
                        <div class="ui right floated teal button clickable" onclick='window.location.href = "{{route('user.profile.edit', ['id' => Auth::user()->id])}}"'>                            
                            Edit Profile
                            <i class="edit"></i>                            
                        </div>                        
                    @endif
                </div>                
            </div>            
        </div>
    </div>    
@endsection