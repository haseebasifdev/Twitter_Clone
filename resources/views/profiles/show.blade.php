<x-app>
    <header class=" mb-6 relative">
        <div class=" relative">
            <img src="/images/download.jfif" width="800px" alt="No Avatar" srcset=""
                class="mb-2   border borderRadius-lg">
            <img src="{{$user->avatar}}" alt="No Avatar" class=" rounded-full mr-2 absolute bottom-0"
                style="left:calc(50% - 75px); bottom:-75px" width="150px " srcset="">
        </div>
        <div class=" flex justify-between mb-3">
            <div>
                <h2 class=" font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class=" text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class=" flex">
                <div>
                    @can('edit', $user)


                    <a href="/profiles/{{auth()->user()->username}}/edit"
                        class="rounded-full border border-gray-300 mr-2 py-2 px-4 text-black text-sm">Edit
                        Profile</a>

                    @endcan
                </div>
                <div>
                    <x-follow-button :user="$user"></x-follow-button>
                </div>
            </div>
        </div>
        <p class=" text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi reprehenderit
            impedit, sequi
            voluptates ad. Cum sapiente voluptatem quod provident laboriosam pariatur eius dolores optio, minima quos
            nisi
            nihil? Aperiam.</p>
        {{-- <a href="{{route('profile',$user->name)}}">

        </a> --}}

    </header>
    @include('timeline',[
    'tweets'=>$user->tweets
    ])
</x-app>