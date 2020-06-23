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
                <div class="container">
                    <h4><b>Categories</b></h4>
                </div>
            </div>

            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="{{ asset('/images/categories/Art.svg')}}">
                <h2 class="card-title" style="text-align: center">Categories</h2>

            </div>
            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img alt="Card image cap" class="card-img-top" src="https://api.adorable.io/avatars/285/abott@adorable.pngCopy to Clipboard
                ">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

</x-app>
