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

    <div class="container" style="margin-top: 2.5%">
        <h2><span class="label label-default">Categories</span></h2>
        <div class="card-deck" style="padding: 30px">

            <div class="card text-center">
                <img alt="Card image cap" class="card-img-top" src="{{ asset('/images/categories/Art.svg')}}" >
                <div class="card-body">
                    <h2><a class="card-title" href="{{ url('https://www.merriam-webster.com/dictionary/category') }}">
                            Categories</a></h2>
                </div>

            </div>

            <div class="card text-center">
                <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
                <div class="card-body">
                    <a class="card-title" href="{{ url('https://www.merriam-webster.com/dictionary/category') }}">
                        Another Cat</a>
                </div>
            </div>
        </div>
    </div>

</x-app>
