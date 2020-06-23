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
    <br><br>

    <div class="container" style="margin-top: 2.5%">
        <h2><span class="label label-default">Categories</span></h2>
        <div class="card-deck" style="padding: 30px">
            <div class="categories-card">
                <img src="{{ asset('/images/categories/Art.svg')}}" alt="Avatar" style="width:100%">
                <div class="container" style="text-align: center">
                    <a href="{{ url('https://www.merriam-webster.com/dictionary/category') }}"><b>Art</b></a>
                </div>
            </div>
            <div class="categories-card">
                <img src="{{ asset('/images/categories/Art.svg')}}" alt="Avatar" style="width:100%">
                <div class="container" style="text-align: center">
                    <a href="{{ url('https://www.merriam-webster.com/dictionary/category') }}"><b>Art</b></a>
                </div>
            </div>
            <div class="categories-card">
                <img src="{{ asset('/images/categories/Art.svg')}}" alt="Avatar" style="width:100%">
                <div class="container" style="text-align: center">
                    <a href="{{ url('https://www.merriam-webster.com/dictionary/category') }}"><b>Art</b></a>
                </div>
            </div>
        </div>
    </div>

</x-app>
