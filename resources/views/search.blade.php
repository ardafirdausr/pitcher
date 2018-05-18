@extends('layouts.app')

@section('content')
<div id="ajax" value="{{ csrf_token() }}" style:"display: none"></div>
<div class="ui grid padded centered search-course" id="search-course">        
    <div class="three wide column">
        <div class="ui vertical menu search-course__menu" id="search-course__menu">
            <form action="" method="GET">
                @csrf                
                <div class="item">
                    <div class="header">Data Pencarian</div>
                    <div class="menu">                        
                            <div class="item">
                                <div class="header">Pelajaran</div>
                                    <div class="ui icon input">
                                    <input type="text" placeholder="Cari pelajaran..." name="pelajaran" value="{{  Request::get('pelajaran')  ?? ''}}">
                                    <i class="search icon"></i>
                                </div>
                            </div>
                            <div class="item"> 
                                <div class="header">Kategori</div>                           
                                <select class="ui dropdown" name="kategori">
                                    <i class="search icon"></i>
                                    <option value="{{ Request::get('kategori') ?? '' }}">{{ Request::get('kategori') ?? 'Kategori' }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="item"> 
                                <div class="header">Kota</div>                           
                                <select class="ui fluid search selection dropdown" name="kota">                                                   
                                    <option value="{{ Request::get('kota') ?? '' }}">{{ Request::get('kota') ?? 'Kota' }}</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                </div>
                <div class="item">
                    <div class="header">Filter</div>
                    <div class="menu">
                        <div class="item">
                            <div class="header">Jangkauan Harga</div>
                                <div class="ui icon input">
                                    <input type="text" placeholder="Harga maksimum" name="nominal" value="{{  Request::get('nominal')  ?? ''}}">
                                    <i class="money bill alternate icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">                                        
                    <input class="ui primary button" type="submit" value="Search">                                                             
                </div>
            </form>  
        </div>
    </div>  
    <div class="twelve wide column search-course__result" id="search-course__result">        
        <h1 class="header">
            Hasil Pencarian Guru {{  ( Request::get('pelajaran') ?? '' )}} 
            {{ Indonesia::findCity(Request::get('kota')) ? Indonesia::findCity(Request::get('kota'))->name : ''}}         
        </h1>
        <div class="ui header divider"></div>
        @if($results->first())
            <div class="ui three column grid">                    
                @foreach($results as $result)
                    <div class="ui column">
                        <div class="ui link card">
                            <div class="content">
                                <div class="header">{{ $result->judul }}</div>
                                    <div class="meta">
                                    <span class="right floated time">{{ $result->tag ?? '' }}</span>
                                    <span class="category"> {{ $result->category->name }} </span>
                                </div>
                                <div class="description">   
                                    <p>{{ $result->deskripsi }}</p>
                                </div>
                            </div>                
                            <div class="extra content clickable" 
                                onclick=" window.location.href = '{{ route('user.profile.show' , ["id" => $result->user->id ]) }}'"
                                >
                                <div class="left floated author">
                                    <img class="ui avatar image" src="{{ asset('uploads/avatar/user.png') }}"> {{ $result->user->name }}
                                </div>
                                <div class="right floated author">
                                    Rating 
                                </div>
                            </div>            
                            <div 
                                class="ui bottom attached button add-course" value="{{ $result->id }}">
                                <div class="left floated"><i class="add icon"></i> Add Course</div>                    
                                <div class="right floated">Rp. {{ $result->harga }}</div>
                            </div>
                        </div>
                    </div>                                               
                @endforeach
            </div>            
            <div class="ui grid centered">
                <div class="four wide column centered">
                    {{-- {{ $results->appends(Request::except('page'))->links() }} wew --}}
                    {{ $results->links() }}
                </div>
            </div>
        @else 
            <h3 class="header">Data Not Found</h3>
        @endif
    </div>      
</div>
@endsection