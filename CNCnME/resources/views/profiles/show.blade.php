<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <?php /* {{-- Image banner for profile page --}} */?>
            <img
                src="/images/Profile-banner.jpg"
                alt=""
                class="mb-2 rounded-lg"
            >
    
            <?php /* {{-- Profile pic in the middle of banner -- }} */?>
            <img
                src="{{ $user->avatar}}"
                alt="your avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
            >
        </div>

        <?php /* {{-- For user name, edit profile and follow me container -- }} */?>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0"> {{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <?php /* {{-- edit profile and follow me buttons -- }} */?>
            <div class="flex">
                <a href=""class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>

                <?php /* {{-- Anonymous blade component -- }} */?>
                <x-follow-button :user="$user"></x-follow-button>
            </div>

        </div>

        <?php /* {{-- Profile description-- }} */?>
        <p class="text-sm">
            An open-source PHP framework, which is robust and easy to understand. 
            It follows a model-view-controller design pattern. 
            Laravel reuses the existing components of different frameworks 
            which helps in creating a web application.
        </p>


    </header>    

    @include('timeline', [
        'posts' => $user->posts    
    ])
</x-app>
