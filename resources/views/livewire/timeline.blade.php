<div>
    @foreach ($tweets as $tweet)
        <div class="flex p-4 border-b border-gray-400">
           {{--  <div class="mr-2">
                <img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full mr-2" width="50" height="50">
            </div> --}}

            <div>
                {{-- <h5 class="font-bold mb-4">
                    <a href="{{ route('/profile', $tweet->user) }}">
                        {{ $tweet->user->name }}
                    </a>
                </h5> --}}

                <p class="text-sm">
                    {{ $tweet->body }}
                </p>
            </div>
        </div>
    @endforeach
</div>
