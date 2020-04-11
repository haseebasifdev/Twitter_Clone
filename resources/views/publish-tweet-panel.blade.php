<div class=" border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" class=" w-full" placeholder="What's up docs?"></textarea>
        <hr class=" my-4">
        <footer class=" flex justify-between">
            <img src="{{auth()->user()->avatar}}" width="50px" height="50px" alt="No Avatar" class=" rounded-full mr-2"
                srcset="">
            <button type="submit" class=" bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-row</button>

        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2"> {{$message}}</p>
    @enderror
</div>