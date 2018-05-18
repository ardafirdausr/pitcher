@extends('layouts.app') @section('content')
<div class="ui container grid centered middle aligned course-index">
    <div class="sixteen wide column">
        <div class="ui teal three item menu">
            <a class="active item" href="{{ route('course.index') }}">
                My Course
            </a>
            <a class="item" >
                Active Course
            </a>
            <a class="item" href="{{ route('course.payment') }}">
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
                            Bahan Ajar
                        </h3>                                              
                        <div class="ui right floated teal button" onclick='location.href="{{ route('course.create') }}"'>
                            <i class="add icon"></i> Tambah Pelajaran
                        </div>                        
                    </div>
                </div>
            </div>            
            <div class="ui divider"></div>
            <div class="ui three column grid">
                @if($courses->first())
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
                                <button 
                                    class="ui bottom attached button"
                                    onclick='window.location.href = "{{route('course.edit', ['id' => $course->id])}}"'>
                                    <div class="floated">
                                        <i class="edit icon"></i> Edit Course
                                    </div>                                
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="ui grid">
                        <div class="sixteend wide column">

                            <h4 class="ui header"> No courses created</h4>
                        </div>
                    </div>
                @endif  
            </div>
        </div>
    </div>
</div>
@endsection