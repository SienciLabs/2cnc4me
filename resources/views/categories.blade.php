<x-app>

    {{--    <h2><span for="categoires" class="label label-default">Categories</span></h2>
        --}}{{--        <label for="categoires">Categories</label>--}}{{--
        <select name="categoires" id="categoires">
            <option value="popular">Popular</option>
            <option value="newest">Newest</option>
            <option value="downloads">Most Downloads</option>
            <option value="ratings">Highest Rated</option>
            <option value="difficulty">Easiest</option>
        </select>--}}
    <br>
    <h2><span class="label label-default pt-lg-5">Categories</span></h2>

    <div class="card-deck">
        <div class="card text-center" style="width: 300px">
            <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
            <div class="card-body">
                <h3><a class="card-title h-25" href="{{ url('https://www.merriam-webster.com/dictionary/category') }}">
                        Art</a></h3>
            </div>
        </div>
        <div class="card text-center">
            <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
            <div class="card-body">
                <h3><a class="card-title" href="{{ url('https://www.merriam-webster.com/dictionary/category') }}">
                        French</a></h3>
            </div>
        </div>

        <div class="card text-center">
            <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
            <div class="card-body">
                <h3><a class="h-25 card-title" href="{{ url('https://www.merriam-webster.com/dictionary/category') }}">
                        Science</a></h3>
            </div>
        </div>

    </div>
</x-app>
