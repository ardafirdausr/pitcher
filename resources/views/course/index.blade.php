@extends('layouts.app') @section('content')
<div class="ui container grid centered middle aligned course-index">
    <div class="sixteen wide column">
        <div class="ui teal three item menu">
            <a class="active item">
                My Course
            </a>
            <a class="item">
                Active Course
            </a>
            <a class="item">
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
                            Pelajaran 
                        </h3>                                              
                        <div class="ui right floated teal button" onclick='location.href="{{ route('course.create') }}"'>
                            <i class="add icon"></i> Tambah Pelajaran
                        </div>                        
                    </div>
                </div>
            </div>            
            <div class="ui divider"></div>
            <div class="ui three column grid">
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
            </div>
        </div>
    </div>
</div>
@endsection