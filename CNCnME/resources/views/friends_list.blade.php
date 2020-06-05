<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
        @forelse (current_user()->follows as $user)
                <li class="mb-4">
                        <div>
                                {{-- Routing to the specific profile once clicked on--}}
                                <a href="{{ route('profile',$user) }}"
                                    class="flex items-center text-sm"
                                >                                        
                                        <img
                                                src="{{ $user->avatar}}"
                                                alt=""
                                                class="rounded-full mr-2"
                                                width="50"
                                                height="50"
                                        >

                                        {{ $user->name}}
                                </a>
                        </div>
                </li>
        @empty
                <li>
                        No friends yet. Try following someone?
                </li>
        @endforelse
</ul>