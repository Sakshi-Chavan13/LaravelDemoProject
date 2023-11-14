<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.header')

    <body>

        @include('partials.navbar')

     
        <div class="main mt-5">
            @yield('content')
        </div>

        
    </body>
</html>