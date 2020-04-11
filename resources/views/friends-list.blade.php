<h3 class=" font-bold text-4xl mb-4">Following</h3>
<ul>
    @forelse (auth()->user()->follows as $user)

    <li class=" mb-4">
        <div>
            <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
                <img src="{{$user->avatar}}" alt="No Avatar" width="40px" height="40px" class=" rounded-full mr-2"
                    srcset="">
                {{$user->name}}
            </a>
        </div>
    </li>
    @empty
    <li>No friends Yet</li>
    @endforelse
</ul>