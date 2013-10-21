<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Stuff will go here  -->
        <title>@yield('title') - Sheffield Entrepreneurs</title>
        <meta name="description" content="">
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/datepicker.css') }}
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        @include('layouts.navigation')
        <div id="content-container">
            <div id="content" class="st-width">
                @if (Session::has('flash_error'))
                <div id='errors'>
                    <p>{{ Session::get('flash_error') }}</p>
                </div>
                @endif

                @if (Session::has('flash_notice'))
                <div id='notice'>
                    <p>{{ Session::get('flash_notice') }}</p>
                </div>
                @endif
                <!-- Wait for more design stuff -->
                @yield('body')
            </div>
        </div>
        <footer>
            <div id="footer-cont" class="st-width">
                @include('layouts.twitter')
                <div id="partners">
                    <h4>Partners &amp; Sponsors</h4>
                    <div id="left-col">
                        <a href="http://nacue.com/"><img src="img/nacue-logo.png" alt="Our Sponsor Nacue's logo" /></a>
                    </div>
                    <div id="right-col">
                        <a href="http://www.shef.ac.uk/union/"><img src="img/sulogo.png" height="78" alt="Sheffield SU logo" /></a>
                    </div>
                </div>
            </div>
            <div id="clear" style="clear:both;"></div>
            <div id="cheating-footer">
                <div id="cheating-subfooter" class="st-width">
                    <div id="footer-foot">
                        <p class="left-float">
                            Sheffield Entrepreneurs, Copyright 2012-2013
                        </p>
                        <p class="right-float">
                            {{ link_to_route('contact', 'Contact Us') }}
                            |
                            @if(Auth::check())
                            {{ link_to_route('admin', 'Admin Page') }}
                            |
                            {{ link_to_route('logout', 'Logout') }}
                            @else
                            {{ link_to_route('loginPage', "Admin Login") }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        {{ HTML::script("js/ui/jquery.js") }}
        {{ HTML::script("js/ui/jquery-ui.js") }}
        <script>
         $(function() {
             $( ".datepicker" ).datepicker();
         });
        </script>
    </body>
</html>
