@extends('layouts.app') @section('content')
<div id="ajax" value="{{ csrf_token() }}" style:"display: none"></div>
<div class="ui container grid centered middle aligned course-index">
    <div class="sixteen wide column">
        <div class="ui teal three item menu">
            <a class="item" href="{{ route('course.index') }}">
                My Course
            </a>
            <a class="item" >
                Active Course
            </a>
            <a class="active item" href="{{ route('course.payment') }}">
                Payment
            </a>
        </div>
    </div>
    <div class="sixteen wide column">
        <div class="ui raised segment">            
            <div class="ui items">
                <div class="item">                        
                    <div class="middle aligned content">
                        <h3 class="header">
                            Pending Course
                        </h3>                                                                      
                    </div>
                </div>
            </div>            
            <div class="ui divider"></div>
            <div>
                <?php $total = 0; ?>
                @foreach($courses as $course)
                    <div class="ui positive message">                        
                        <i class="close icon deleteCourse" value="{{ $course->id }}"></i>                        
                        <div class="header">
                            {{ $course->judul }}
                        </div>
                        <p>{{ $course->harga}}</p>
                    </div>
                    <?php $total+= $course->harga ?>
                @endforeach
            </div>
            <div class="ui segments">
                <div class="ui green secondary right aligned segment">                    
                    <button class="ui left floated button">Total</button>
                    <button class="ui floated left teal animated button">                        
                        <div id="total" class="visible content">{{ $total }}</div>
                        <div class="hidden content">
                            Bayar
                        </div>
                            
                    </button>                    
                </div>                
            </div>                 
            {{-- <div class="ui three column grid">
                @foreach($courses as $course)
                    <div class="column">
                        <div class="ui card">
                            <div class="content">
                                <div class="header">{{ $course->judul ?? '' }}</div>
                                <div class="meta">
                                    <span class="right floated time">{{ $course->tag ?? '' }}</span>
                                    <span class="category"> {{ $course->category->name ?? '' }} </span>
                                </div>
                                <div class="deskripsi">
                                    <p>{{ $course->deskripsi ?? ''}}</p>
                                </div>
                            </div>                            
                            <div class="ui bottom attached button">
                                <div class="floated">
                                    <i class="edit icon"></i> Edit Course
                                </div>                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </div>
</div>
@endsection
