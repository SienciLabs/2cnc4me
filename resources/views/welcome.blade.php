<x-app>
{{--    Feature header and banner--}}
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h3>
                               Featured
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Starts Here -->

        <div class="main-banner header-text">
            <div class="container-fluid">
                <div class="owl-banner owl-carousel">
                    <div class="item">
                        <img src="{{asset('/images/CNSheep.jpg')}}" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Office</span>
                                </div>
                                <a href="post-details.html"><h4>Simple Desk Organizer</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/CNSheep.jpg" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Furniture</span>
                                </div>
                                <a href="post-details.html"><h4>Modular Cabinets with Plastic keys</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/CNSheep.jpg" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Office</span>
                                </div>
                                <a href="post-details.html"><h4>Simple Desk Organizer</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/CNSheep.jpg" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Furniture</span>
                                </div>
                                <a href="post-details.html"><h4>Modular Cabinets with Plastic keys</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/CNSheep.jpg" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Office</span>
                                </div>
                                <a href="post-details.html"><h4>Simple Desk Organizer</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/CNSheep.jpg" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>Furniture</span>
                                </div>
                                <a href="post-details.html"><h4>Modular Cabinets with Plastic keys</h4></a>
                                <ul class="post-info">
                                    <li><a href="#">cncguy94</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Add to Collection</a></li>
                                    <li><a href="#">38 Likes</a></li>
                                    <li><a href="#">144 Downloads</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Ends Here -->
    </div>

{{--    Content--}}
    <div class="blog-post grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    @include('components.partials.sidepanel.homepage-categories-sidepanel')
                </div>
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="sidebar-heading" style="padding-top: 45px; padding-bottom: 15px;">
                            <h4>
                                Projects
                            </h4>
                        </div>
                        {{--Carousel start--}}
                        <div class="row mx-auto my-auto">
                            <div id="projectsCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    @for ($carouselItem = 0; $carouselItem <= 2; $carouselItem++)
                                        @if ($carouselItem == 0)
                                            {{-- This is the first iteration.--}}
                                            <div class="carousel-item active">
                                                @for ($j = 0; $j < 2; $j++)
                                                    <div class="row carouselRow">
                                                        @for ($i = 0; $i < 2; $i++)
                                                            <div class="col-lg-6">
                                                                @include('components.partials.cards.project-cards')
                                                            </div>
                                                        @endfor
                                                    </div>
                                                @endfor
                                            </div>
                                        @endif
                                        <div class="carousel-item">
                                            @for ($numOfRows = 0; $numOfRows < 2; $numOfRows++)
                                                <div class="row carouselRow">
                                                    @for ($numOfCols = 0; $numOfCols < 2; $numOfCols++)
                                                        <div class="col-lg-6">
                                                            @include('components.partials.cards.project-cards')
                                                        </div>
                                                    @endfor
                                                </div>
                                            @endfor
                                        </div>
                                    @endfor

                                </div>
                            </div>
                        </div>
                        {{--  Carousel Control--}}
                        <div class="row justify-content-end">
                            <div class="col" style="margin-left: 80%">
                                <a class="carousel-control-prev text-dark" href="#projectsCarousel" role="button" data-slide="prev">
                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                            </div>
                            <div class="col">
                                <a class="carousel-control-next text-dark" href="#projectsCarousel" role="button" data-slide="next">
                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        {{--Carousel end--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sidebar-item tags">
                                    <div class="sidebar-heading">
                                        <h2>Recent makes</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            @for ($i = 0; $i < 3; $i++)
                                                @include('components.partials.cards.project-cards')
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="sidebar-heading" style="padding-top: 45px;padding-bottom: 40px;">
                            <h4>
                                Collections
                            </h4>
                        </div>
                        {{--Carousel start--}}
                        <div class="row mx-auto my-auto">
                            <div id="collectionsCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    @for ($carouselItem = 0; $carouselItem <= 2; $carouselItem++)
                                        @if ($carouselItem == 0)
                                        {{-- This is the first iteration.--}}
                                            <div class="carousel-item active">
                                                @for ($j = 0; $j < 2; $j++)
                                                    <div class="row carouselRow">
                                                        @for ($i = 0; $i < 2; $i++)
                                                            <div class="col-lg-6">
                                                                @include('components.partials.cards.collection-cards')
                                                            </div>
                                                        @endfor
                                                    </div>
                                                @endfor
                                            </div>
                                        @endif
                                        <div class="carousel-item">
                                            @for ($numOfRows = 0; $numOfRows < 2; $numOfRows++)
                                                <div class="row carouselRow">
                                                    @for ($numOfCols = 0; $numOfCols < 2; $numOfCols++)
                                                        <div class="col-lg-6">
                                                            @include('components.partials.cards.collection-cards')
                                                        </div>
                                                    @endfor
                                                </div>
                                            @endfor
                                        </div>
                                    @endfor
{{--
                                    <div class="carousel-item active">
                                        @for ($j = 0; $j < 2; $j++)
                                            <div class="row carouselRow">
                                                @for ($i = 0; $i < 2; $i++)
                                                    <div class="col-lg-6">
                                                        @include('components.partials.cards.collection-cards')
                                                    </div>
                                                @endfor
                                            </div>
                                        @endfor
                                    </div>

                                    <div class="carousel-item">
                                        --}}{{--<div class="row carouselRow">
                                            @for ($i = 0; $i < 2; $i++)
                                                <div class="col-lg-6">
                                                    @include('components.partials.cards.collection-cards')
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="row carouselRow">
                                            @for ($i = 0; $i < 2; $i++)
                                                <div class="col-lg-6">
                                                    @include('components.partials.cards.collection-cards')
                                                </div>
                                            @endfor
                                        </div>--}}{{--
                                        @for ($j = 0; $j < 2; $j++)
                                            <div class="row carouselRow">
                                                @for ($i = 0; $i < 2; $i++)
                                                    <div class="col-lg-6">
                                                        @include('components.partials.cards.collection-cards')
                                                    </div>
                                                @endfor
                                            </div>
                                        @endfor

                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        {{--  Carousel Control--}}
                        <div class="row justify-content-end">
                            <div class="col" style="margin-left: 80%">
                                <a class="carousel-control-prev text-dark" href="#collectionsCarousel" role="button" data-slide="prev">
                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                            </div>
                            <div class="col">
                                <a class="carousel-control-next text-dark" href="#collectionsCarousel" role="button" data-slide="next">
                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        {{--Carousel end--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
