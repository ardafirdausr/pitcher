@extends('layouts.app')

@section('content')

    <div class="ui home">
        <div class="home-landing">              
            <div class="home-landing-content">
                <h1 class="home-landing-content__title ">
                    PITCHER
                </h1>
                <h3 class="home-landing-content__subtitle">
                    Cari guru private terbaik dengan harga termurah dan mudah
                </h3>                
                <form class="ui left icon action input medium" action={{ route('search') }}>
                    <i class="search icon"></i>
                    <input type="text" name="pelajaran" placeholder="Cari pelajaran...">                                                        
                    <div class="ui scrolling dropdown green button">
                        <input type="hidden" name="kategori">                        
                        <div class="default text">Kategori</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">                            
                            @foreach(DB::table('categories')->get() as $category)                                
                                <div class="item" data-value="{{ $category->id }}">{{ $category->name }}</div>                            
                            @endforeach                            
                        </div>
                    </div>
                    <button class="ui teal large button">Cari</button>
                </form>
            </div>            
        </div>
        
        <div id="home-pro" class="home-pro ui container grid middle aligned">                               
            <div class="sixteen wide column home-flow-header">
                <h2 class="ui dividing header">Keunggulan Kami</h2>

            </div>
            <div class="four wide column">
                <div class="ui link card home-pro-card">
                    <div class="image home-pro-card__image">
                        <i class="thumbs up outline icon"></i>                        
                    </div>
                    <div class="content home-pro-card__content">
                        <a class="header">Mudah</a>
                        <div class="description">
                            Terdapat lebih dari 100 guru dari berbagai macam fokus ilmu
                        </div>
                    </div>
                </div>
            </div>            
            <div class="four wide column">
                <div class="ui link card home-pro-card">
                    <div class="image home-pro-card__image">
                        <i class="check circle outline icon"></i>
                    </div>
                    <div class="content home-pro-card__content">
                        <a class="header">Sesuai</a>
                        <div class="description">
                            Terdapat sistem filter untuk mencari guru sesuai budget dan kebutuhan
                        </div>
                    </div>
                </div>
            </div> 
            <div class="four wide column">
                <div class="ui link card home-pro-card">
                    <div class="image home-pro-card__image">
                        <i class="calendar check outline icon"></i>
                    </div>
                    <div class="content home-pro-card__content">
                        <a class="header">Teratur</a>
                        <div class="description">
                            Pengaturan jadwal yang mudah tanpa adanya tabrakan jadwal
                        </div>
                    </div>
                </div>
            </div> 
            <div class="four wide column">
                <div class="ui link card home-pro-card">
                    <div class="image home-pro-card__image">
                        <i class="key icon"></i>
                    </div>
                    <div class="content home-pro-card__content">
                        <a class="header">Aman</a>
                        <div class="description">
                            Guru telah terverifikasi oleh pihak pitcher
                        </div>
                    </div>
                </div>
            </div>                                 
        </div>                        

        <div id="home-flow" class="ui grid padded centered middle aligned home-flow">
            <div class="ten wide column home-flow-header">
                <h2 class="ui dividing header home-flow-header__title"> Cara Kerja </h2>                
                <div class="ui container text">
                    Dapatkan guru sesuai dengan fokus yang ingin anda tekuni dengan beberapa langkah mudah dan cepat 
                </div>
            </div>                         
            <div class="ten wide column">  
                <div class="ui grid middle aligned">
                    <div class="ten wide column">
                        <h3 class="Header"> Cari Guru</h3>
                        Cari guru sesuai dengan pelajaran ingin Anda pelajari, pilih Kota tempat Anda tinggal dan tentukkan budget Anda.
                    </div>
                    <div class="six wide column">
                        <img class="ui medium image" src="{{ asset('image/flow1.jpg') }}" alt="">
                    </div>
                </div>                                  
            </div> 
            <div class="ten wide column">  
                <div class="ui grid middle aligned">
                    <div class="six wide column">
                        <img class="ui medium image" src="{{ asset('image/flow2.jpg') }}" alt="">                        
                    </div>
                    <div class="ten wide column">
                            <h3 class="Header"> Tentukan Jadwal </h3>
                            Pilih jadwal untuk melakukan pembelajaran dengan guru private
                    </div>
                </div>                                  
            </div>             
            <div class="ten wide column">  
                <div class="ui grid middle aligned">
                    <div class="ten wide column">
                        <h3 class="Header"> Hubungi Guru Anda </h3>
                        Hubungi Guru Anda untuk berdiskusi bagaimana dan dimana tempat Anda dengan Guru Anda melakukan kegiatan belajar-mengajar.
                    </div>
                    <div class="six wide column">
                        <img class="ui medium image" src="{{ asset('image/flow3.jpg') }}" alt="">
                    </div>
                </div>                                  
            </div>                                      
        </div>
        
        <div class="home-category">            
            <div>
                <h2 class="ui dividing header">Kategori Pelajaran</h2>
            </div>
            <div class="ui stacked segment">
                <div class="ui nine column grid centered">                                          
                    @foreach(DB::table('categories')->get() as $category)                                
                        <div class="column">
                            <form action="{{ route('search') }}">
                                <input type="hidden" name="kategori" value="{{ $category->id }}">
                                <button class="ui basic button">{{ $category->name }}</button>
                            </form>
                        </div>
                    @endforeach                                                
                </div>
            </div>              
        </div>
    </div>   
@endsection