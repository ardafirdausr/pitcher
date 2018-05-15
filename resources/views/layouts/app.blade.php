<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pitcher')</title>    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>    
    <script src="{{ asset('js/app.js') }}" defer></script>
        
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.svg')}}" /> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}">        
</head>

<body>
    <div id="app" class="ui grid padded">        
        <div class="sixteen wide column no-padding main-header" id="main-header">            
            @include('layouts.header')            
        </div>
        <div class="ui sixteen wide column no-padding main-container" id="main-container">            
            @yield('content')            
        </div>        
        @if( !(Route::is('register') || Route::is('login')) ) 
            <div class="sixteen wide column no-padding main-footer">
                <div class="ui inverted vertical footer segment">
                    @include('layouts.footer')
                </div>
            </div>
        @endif
    </div>
</body>

</html>
