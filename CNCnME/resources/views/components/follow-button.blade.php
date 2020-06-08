<?php /* {{-- Only display this button for other users, not the signed in user -- }} */?>
@unless(current_user()->is($user))
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button  
            type="submit" 
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
        >
        <?php /* {{-- Button changes to Unfollow or follow me depending on the authenticated user -- }} */?>
            {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}} 
        </button>
    </form>
@endunless