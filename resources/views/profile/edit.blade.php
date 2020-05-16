<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')


    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="name"
        >
            Name
        </label>
        <input class="border border-gray-400 p-2 w-full"
            type="text"
            name="name"
            id="name"
            value="{{current_user()->name}}"
            required
        >

        @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="username"
        >
            Username
        </label>
        <input class="border border-gray-400 p-2 w-full"
            type="text"
            name="username"
            id="username"
            value="{{current_user()->username}}"
            required
        >

        @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="avatar"
        >
            Avatar
        </label>
        <div class="flex">
            <input class="border border-gray-400 p-2 w-full"
                type="file"
                name="avatar"
                id="avatar"
                value="{{current_user()->avatar}}"
                accept="image/*"
                required
            >
    
            <img src="{{current_user()->avatar}}"
                 alt="Your avatar"
                 width="40px"
            
            >
        </div>
        
        @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="email"
        >
            Email
        </label>
        <input class="border border-gray-400 p-2 w-full"
            type="email"
            name="email"
            id="email"
            value="{{current_user()->email}}"
            required
        >

        @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="password"
        >
            Password
        </label>
        <input class="border border-gray-400 p-2 w-full"
            type="password"
            name="password"
            id="password"
        >

        @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
            for="password_confirmation"
        >
            Password confirmation
        </label>
        <input class="border border-gray-400 p-2 w-full"
            type="password"
            name="password_confirmation"
            id="password_confirmation"
        >
 
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <button type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        >
            Submit
        </button>
    </div>

    



</form>
</x-app>
