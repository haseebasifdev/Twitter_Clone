<x-app>
    <div>
        @foreach ($users as $user)
        <div>
            <a href="/profiles/{{$user->username}}" class="flex items-center mb-5">
                <img src="{{$user->avatar}}" width="50px" alt="No Avatar" srcset="" class=" rounded mr-4">
                <div>
                    <h4 class=" font-bold">{{'@'.$user->username}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</x-app>