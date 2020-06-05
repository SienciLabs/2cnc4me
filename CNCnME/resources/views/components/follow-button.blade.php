<form method="POST" action="/profiles/{{ $user->name}}/follow">
                    @csrf
                    <button  
                        type="submit" 
                        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
                    >
                    <?php /* {{-- Button changes to Unfollow or follow me depending on the authenticated user -- }} */?>
                        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}} 
                    </button>
</form>