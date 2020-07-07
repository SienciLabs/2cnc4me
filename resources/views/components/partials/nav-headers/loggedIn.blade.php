
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
                        <a class="nav-link" href="{{ url('projects') }}">Projects
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('collections') }}">Collections</a>
                    </li>
                    {{--<li class="nav-item dropdwn">
                        <a><h4><img src="{{ asset('images/icons/PlusIcon.svg') }}" alt="Add" width="30px"></h4></a>
                        <div class="dropdwn-content">
                            <a href="#">Add New Project</a>
                            <a href="#">Add New Collection</a>
                        </div>
                    </li>

                    <li class="nav-item dropdwn">
                        <a><h4><img src="{{ asset('images/icons/PlusIcon.svg') }}" alt="Add" width="30px"></h4></a>
                        <div class="dropdwn-content">
                            <a href="#">My Profile</a>
                            <a href="#">My Projects</a>
                            <a href="#">My Collections</a>
                            <a href="#">Sign Out</a>
                        </div>
                    </li>--}}
                </ul>
            </div>

            <a class="dropdwn"><h4><img src="{{ asset('images/icons/PlusIcon.svg') }}" alt="Add" width="30px"></h4>
                <div class="dropdwn-content">
                    <a href="#">Add New Project</a>
                    <a href="#">Add New Collection</a>
                </div>
            </a>

        </div>
    </nav>
</header>
