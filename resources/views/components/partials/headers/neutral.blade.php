<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><h2><img src="{{ asset('images/24logo.svg') }}" alt="2cnc4me" width="30px"></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Projects
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.html">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog.html">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block login_signupBtn " type="submit" href="{{ route('login') }}">
                            Login / Sign Up
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
