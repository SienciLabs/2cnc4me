<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/posts">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="Ready to carve?"
            style="height: 50px; resize: none;"
            required
            autofocus
        >
        </textarea>

        <hr class="my-4">
        
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
            {{-- Button is now a component --}}
           <x-button></x-button>

        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>