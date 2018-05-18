@extends('layouts.app')
@section('content')    
    <div class="ui grid container centered middle aligned profile-create-page">
        <div class="ui twelve wide column raised segment">            
            <form class="ui form" method="POST" action="{{ route('user.profile.update', ['id' => Auth::user()->id]) }}">                    
                @csrf
                @method('PUT')
                <h4 class="ui dividing header">Profil Pengguna</h4>                                
                <div class="fields">                        
                    <div class="four wide field">
                        <img class="ui small circular image" src="{{ asset('uploads/avatar/user.png') }}">
                    </div>
                    <div class="twelve wide field">                        
                        <div class="field">
                            <label>Nama</label>                
                            <div class="field">
                                <div class="ui left icon action input">
                                    <i class="user icon"></i>
                                    <input type="text" name="name" placeholder="Name" value="{{ $userData->name ?? '' }}">                
                                </div>
                            </div>
                            @if ($errors->has('name'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('name') }}
                                </div>                                    
                            @endif  
                        </div>
                        <div class="field">
                            <label>Email</label>                
                            <div class="field">
                                <div class="ui left icon action input">
                                    <i class="envelope icon"></i>
                                    <input type="text" name="email" placeholder="Email" value="{{ $userData->email ?? '' }}">                
                                </div>
                            </div>
                            @if ($errors->has('email'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('email') }}
                                </div>                                    
                            @endif  
                        </div>
                    </div>
                </div>            
                <div class="field">
                    <label>Nomor Telepon</label>                
                    <div class="field">
                        <div class="ui left icon action input">
                            <i class="phone square icon"></i>
                            <input type="text" name="no_telepon" placeholder="ex: 081234567890" value="{{ $userProfile->no_telepon ?? '' }}">                
                        </div>
                    </div>
                    @if ($errors->has('no_telepon'))                                                                        
                        <div class="ui pointing red basic label">
                            {{ $errors->first('no_telepon') }}
                        </div>                                    
                    @endif
                </div>
                <div class="field">
                    <label>Jenis Kelamin</label>                
                    <div class="field">
                        <select class="ui fluid dropdown" name="jenis_kelamin" value="{{ $userProfile->jenis_kelamin ?? '' }}">
                            <option value={{ $userProfile->jenis_kelamin ?? ''}}>{{ $userProfile->jenis_kelamin ?? 'Jenis Kelamin'}}</option>
                            <option value="Laki-laki">Laki-laki</option>                        
                            <option value="Perempuan">Perempuan</option>                        
                        </select>
                    </div>
                    @if ($errors->has('jenis_kelamin'))                                                                        
                        <div class="ui pointing red basic label">
                            {{ $errors->first('jenis_kelamin') }}
                        </div>                                    
                    @endif
                </div>
                <div class="fields">
                    <div class="eight wide field">
                        <label>Provinsi</label>
                        <select id="edit-profile-province" class="ui fluid search selection dropdown" name="provinsi" value="{{ $userProfile->provinsi ?? '' }}">                                 
                            <option value="{{ $userProfile->provinsi ?? ''}}">{{ $provinsiName ?? 'Provinsi'}}</option>                                                                              
                            @foreach( $provinces as $province)
                                <option value="{{ $province->id }}">{{$province->name}}</option>                        
                            @endforeach
                        </select>
                        @if ($errors->has('provinsi'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('provinsi') }}
                            </div>                                    
                        @endif
                    </div>
                    <div class="eight wide field">
                        <label>Kota</label>
                        <select id="edit-profile-city" class="ui fluid search selection dropdown" name="kota">
                            <option value="{{ $userProfile->kota ?? ''}}">{{ $kotaName ?? 'Kota' }}</option>                            
                        </select>
                        @if ($errors->has('kota'))                                                                        
                            <div class="ui pointing red basic label">
                                {{ $errors->first('kota') }}
                            </div>                                    
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label>Alamat</label>                                    
                    <div class="field">
                        <div class="ui left icon action input">
                            <i class="home icon"></i>                            
                            <input type="text" name="alamat" placeholder="Adress" value="{{ $userProfile->alamat ?? '' }}">                
                        </div>
                    </div>
                    @if ($errors->has('alamat'))                                                                        
                        <div class="ui pointing red basic label">
                            {{ $errors->first('alamat') }}
                        </div>                                    
                    @endif
                </div>
                <div class="field">
                    <label>Kota Mengajar</label>
                    <select id="edit-profile-city" class="ui fluid search selection dropdown" name="kota_mengajar">
                        <option value="{{ $kotaMengajar->id ?? ''}}">{{ $kotaMengajar->name  ?? 'Kota Mengajar' }}</option>                            
                        @foreach($cities as $city)  
                        <option value="{{ $city->id ?? ''}}">{{ $city->name  ?? 'Kota Mengajar' }}</option>                            
                        @endforeach
                    </select>
                    @if ($errors->has('kota_mengajar'))                                                                        
                        <div class="ui pointing red basic label">
                            {{ $errors->first('kota_mengajar') }}
                        </div>                                    
                    @endif
                </div>
                <div class="field">
                    <label>Tentang</label>
                    <textarea name="tentang" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 75px;"> {{ $userProfile->tentang ?? '' }} </textarea>
                </div>
                <div class="field">
                    <label>Biodata</label>
                    <textarea name="biodata" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 75px;"> {{ $userProfile->biodata ?? ''}}</textarea>
                </div>                
                
                {{-- <div class="field">                    
                    <div class="ui styled fluid accordion">                    
                        <div class="title">
                          <i class="dropdown icon"></i>
                            Data Mengajar
                        </div>
                        <div class="content">
                          <p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
                        </div>                    
                    </div>                    
                </div> --}}
                
                <input class="ui right floated button blue" type="submit" value="Submit"></input>                
            </form>                                    
            <div class="ui left floated button clickable" onclick='window.location.href = "{{route('user.profile.show', ['id' => Auth::user()->id])}}"'>                            
                Cancel
                <i class="edit"></i>                            
            </div>             
        </div>
    </div>
@endsection