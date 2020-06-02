@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <?php /* {{-- Image banner for profile page --}} */?>
        <img
            src="/images/Profile-banner.jpg"
            alt=""
            class="mb-2 rounded-lg"
        >
        <?php /* {{-- For user name, edit profile and follow me container -- }} */?>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0"> {{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <?php /* {{-- edit profile and follow me buttons -- }} */?>
            <div>
                <a href=""class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
                    Follow Me
                </a>
            </div>

        </div>

        <?php /* {{-- Profile description-- }} */?>
        <p class="text-sm">
            An open-source PHP framework, which is robust and easy to understand. 
            It follows a model-view-controller design pattern. 
            Laravel reuses the existing components of different frameworks 
            which helps in creating a web application.
        </p>

        <?php /* {{-- Profile pic in the middle of banner -- }} */?>
        <img
            src="{{ $user->avatar}}"
            alt="your avatar"
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top:138px"
        >

    </header>    

    @include('timeline', [
        'posts' => $user->posts    
    ])
@endsection
