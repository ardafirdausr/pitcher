<div class="ui fixed inverted menu main-header">
    <div class="ui container">
        <a href="{{ route('home') }}" class="header item">
            <img class="logo" src="{{ asset('image/logo-4.svg') }}" style="width: 120px"> 
        </a>
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'teal active' : '' }} item">Home</a>
        <a href="{{ route('search') }}" class="{{ Request::is('search') ? 'teal active' : '' }} item">Cari Guru</a>                

        <div class="right menu header-guest">
            @guest                
                <a class="ui {{ Request::is('register') ? 'teal active' : ''}} item" href="{{ route('register') }}">
                    Register
                </a>
                <a class="ui {{ Request::is('login') ? 'teal active' : ''}} item" href="{{ route('login') }}">
                    Login
                </a>
            @else 
                <a class="ui {{ Request::is('login') ? 'teal active' : ''}} item" href="{{ route('course.index') }}">
                    <i class="book icon"></i> Pelajaran
                </a>
                {{-- <a class="ui {{ Request::is('login') ? 'teal active' : ''}} item" href="{{ route('login') }}">
                    <i class="calendar alternate icon"></i> Jadwal
                </a> --}}
                <div class="ui simple dropdown item header-user">
                    {{ Auth::user()->name }}
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item" href="{{ route('user.profile.show', ['id' => Auth::user()->id ]) }}">
                            <i class="user icon"></i>Profile
                        </a>
                        <a class="item" href="{{  route('user.identity.show', ['id' => Auth::user()->id ]) }}">
                            <i class="address card icon"></i>Identitas
                        </a>
                        <a class="item" href="{{ route('user.edit', ['id' => Auth::user()->id ]) }}">                                
                            <i class="key icon"></i> Ubah Password
                        </a>                        
                        <div class="divider"></div>
                        <a class="item active" href={{ route('logout') }}
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="sign out alternate icon"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>                        
                </div>
            @endguest        
        </div>
    </div>
</div>
