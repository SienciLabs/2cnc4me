<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2cnc4me</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <section class="px-8 py-4 mb-6">
        <header>
            <!-- Header Start -->
            <div class="header" id="stickyHeader">
                <! -- Logo-->
                <div>
                    <h4>
                        <img
                            src="/images/24logo.svg"
                            alt="2cnc4me"
                        />
                    </h4>
                </div>
                <div>
                    <form>
                        <input type="text" name="search" placeholder="Search..">
                    </form>
                </div>
            </div>
            <div class="content">
                <h3>On Scroll Sticky Header</h3>
                <p>The header will stick to the top when you reach its scroll position.</p>
                <p>Scroll back up to remove the sticky effect.</p>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>

            </div>
            <!-- Header End -->
        </header>

    </section>

</div>

<script src="http://unpkg.com/turbolinks"></script>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("stickyHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>

</body>
</html>
