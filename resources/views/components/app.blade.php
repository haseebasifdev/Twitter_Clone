<x-master>
    <section class=" px-8">
        <main class=" mx-auto container">
            <div class="lg:flex justify-between">
                @if (auth()->check())
                <div class="lg:w-32">@include('side-links') </div>
                @endif
                <div class="lg:flex-1 lg:mx-10" style=" max-width:700px">
                    {{$slot}}
                    {{-- @yield('content') --}}
                </div>
                @if (auth()->check())
                <div class=" lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include('friends-list')
                </div>
                @endif
            </div>

        </main>
    </section>
</x-master>