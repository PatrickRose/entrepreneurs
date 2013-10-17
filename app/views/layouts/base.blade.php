<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Stuff will go here  -->
        <title>@yield('title') - Sheffield Entrepreneurs</title>
        <meta name="description" content="">
        {{ HTML::style('css/main.css') }}
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        @include('layouts.navigation')
        <div id="content" class="st-width">
            @if (Session::has('flash_error'))
                {{ Alert::danger("<h4 class='alert-heading'>Oh noes!</h4>" .Session::get('flash_error'))->block() }}
            @endif

            @if (Session::has('flash_notice'))
                {{ Alert::info(Session::get('flash_notice'))->block() }}
            @endif
            <!-- Wait for more design stuff -->
            @yield('body')
        </div>
        <footer>
            <div id='dem-tweets'>
                Tweets
            </div>
            <div id="partners">
            </div>
            <div id="clear" style="clear:both;"></div>
            <div id="cheating-footer">
                <div id="cheating-subfooter" class="st-width">
                    <div id="footer-foot">
                        <p class="left-float">
                            Sheffield Entrepreneurs, Copyright 2012-2013
                        </p>
                        <p class="right-float">
                            <a>Site Map</a>
                            |
                            <a>Cookie Policy</a>
                            |
                            <a>Jobs</a>
                            |
                            <a>Contact us</a>
                            |
                            @if(Auth::check())
                                {{ link_to_route('admin', 'Admin Page') }}
                            @else
                                {{ link_to_route('loginPage', "Admin Login") }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
