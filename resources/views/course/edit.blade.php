@extends('layouts.app')

@section('content')
    <div class="ui container grid centered middle aligned course-create">        
            <div class="ui sixteen wide column raised segment">
                <div class="twelve wide column">    
                    <h3 class="ui dividing header">Edit Pelajaran</h3>
                    <form class="ui form" method="POST" action={{ route('course.update', ['id' => $result->id]) }}>
                        @csrf   
                        @method('put')                        
                        <div class="fields">
                            <div class="twelve wide field">
                                <label>Judul Pelajaran</label>                
                                <div class="field">
                                <input type="text" name="judul" placeholder="ex: Framework PHP" value="{{ $result['judul'] ?? '' }}">                
                                </div>
                                @if ($errors->has('judul'))                                                                        
                                    <div class="ui pointing red basic label">
                                        {{ $errors->first('judul') }}
                                    </div>                                    
                                @endif
                            </div>
                            <div class="four wide field">
                                <div class="header">Kategori</div>                           
                                <select class="ui dropdown" name="kategori">
                                    <i class="search icon"></i>
                                    <option value="{{ Request::get('kategori') ?? '' }}">{{ Request::get('kategori') ?? 'Kategori' }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategori'))                                                                        
                                    <div class="ui pointing red basic label">
                                        {{ $errors->first('kategori') }}
                                    </div>                                    
                                @endif
                            </div>
                        </div>             
                        <div class="field">
                            <label>Deskripsi Pelajaran (maks. 150)</label>                
                            <div class="field">
                                    <textarea name="deskripsi" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 75px;"> {{ $result['deskripsi'] ?? '' }} </textarea>
                            </div>
                            @if ($errors->has('deskripsi'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('deskripsi') }}
                                </div>                                    
                            @endif
                        </div>
                        <div class="field">
                            <label>Harga per jam</label>                
                            <div class="field">
                            <input type="number" name="harga" placeholder="ex: 200000" value="{{ $result['harga'] ?? '' }}">                
                            </div>
                            @if ($errors->has('harga'))                                                                        
                                <div class="ui pointing red basic label">
                                    {{ $errors->first('harga') }}
                                </div>                                    
                            @endif
                        </div>                             
                        <input class="ui right floated button blue" type="submit" value="submit"></input>                                
                    </form>

                    <form action="{{ route('course.destroy', ['id' => $result->id]) }}" method="post">                
                        @csrf
                        @method('delete')
                        <button type="submit" class="ui right floated button red"> 
                            Delete 
                        </button>
                    </form>          

                    <button 
                      class="ui left floated button clickable" 
                      onclick='window.location.href = "{{route('course.index')}}"'
                      >Cancel</a></button> 
                </div>                              
        </div>    
    </div>
@endsection