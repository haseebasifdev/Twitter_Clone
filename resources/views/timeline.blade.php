<div class=" border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)

    @include('tweet')
    @empty
    <p class="p-4">No Tweet Yet.</p>

    @endforelse
</div>
