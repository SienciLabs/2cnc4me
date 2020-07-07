<?php /*
{{ HTML::form("foo") }};
{{ HTML::form("bar") }};
*/ ?>
<!DOCTYPE html>
<html lang="en">

  <head>

        @include('components.partials.head')
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    {{--    If the user is logged in, present the loggedInHeader--}}
{{--    @if(auth()->check())
       @include('components.partials.headers.loggedIn')
    @else
        @include('components.partials.headers.neutral')
    @endif--}}
    @include('components.partials.nav-headers.loggedIn')
    {{ $slot }}

    {{-- Footers --}}
    @include('components.partials.footers.footer')
    @include('components.partials.footers.footer-scripts')

  </body>
</html>
