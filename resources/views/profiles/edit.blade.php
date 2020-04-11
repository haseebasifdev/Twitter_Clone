<x-app>
    <form action="/profiles/{{$user->username}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <label for="name" class="  block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" name="name" class="border border-gray-400 p-2 w-full" id="name" value="{{$user->name}}"
                required>
            @error('name')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="username" class=" block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full"
                value="{{$user->username}}" required>
            @error('username')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="avatar" class=" block mb-2 uppercase font-bold text-xs text-gray-700">Select Avatar</label>
            <div class=" flex">
                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full"
                    value="{{$user->avatar}}">
                <img src="{{$user->avatar}}" width="50px" alt="" srcset="">
            </div>
            @error('avatar')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="email" class=" block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full"
                value="{{$user->email}}" required>
            @error('email')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="password" class=" block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full">
            @error('password')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="password_confirmation" class=" block mb-2 uppercase font-bold text-xs text-gray-700">password
                Confirmation</label>
            <input type="password" name="password_confirmation" class="border border-gray-400 p-2 w-full"
                id="password_confirmation">
            @error('password_confirmation')
            <p class=" text-red-400 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit"
                class=" mt-2 bg-blue-400 text-white rounded px-4 py-2 hover:bg-blue-500">Submit</button>
        </div>
    </form>
</x-app>