<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
        @foreach (range(1,8) as $index)
                <li class="mb-5">
                        <div class="flex items-center text-sm">
                                <img
                                        src=" https://api.adorable.io/avatars/40/abott@adorable.png"
                                        alt=""
                                        class="rounded-full mr-2"
                                >
                                John AppleSeed
                        </div>
                </li>
        @endforeach
</ul>