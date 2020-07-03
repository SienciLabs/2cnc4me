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
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
                if (!e.target.matches('.dropbtn')) {
                    var myDropdown = document.getElementById("myDropdown");
                    if (myDropdown.classList.contains('show')) {
                        myDropdown.classList.remove('show');
                    }
                }
        }
    </script>
  </body>
</html>
