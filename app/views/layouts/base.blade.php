<!doctype html>
<html>
    <head>
        <!-- Stuff will go here  -->
        <title>@yield('title') - Sheffield Entrepreneurs</title>
        {{ Basset::show('bootstrapper.css') }}
        {{ HTML::style('css/datepicker.css') }}
    </head>
    <body>
        <div class='container'>
            @include('layouts.navigation')
            @if (Session::has('flash_error'))
            {{ Alert::danger("<h4 class='alert-heading'>Oh noes!</h4>" .Session::get('flash_error'))->block() }}
            @endif

            @if (Session::has('flash_notice'))
            {{ Alert::info(Session::get('flash_notice'))->block() }}
            @endif
            <!-- Wait for more design stuff -->
            <div class='row'>
                @yield('body')
            </div>
            <div class='row'>
                @if(!Auth::check())
                {{ link_to_route('loginPage', "Admin Login") }}
                @endif
            </div>
        </div>
        {{ Basset::show('bootstrapper.js') }}
        {{ HTML::script('js/datepicker.js') }}
    </body>
</html>
