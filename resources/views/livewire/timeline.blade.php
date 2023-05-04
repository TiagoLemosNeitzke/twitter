<div class="mt-10 text-white text-lg">
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
                 {{$loop->index}} |  {{ $tweet->body }}
                </p>
            </div>
        </div>
    @endforeach
    <div x-data="{
        observe() {
            const observer = new IntersectionObserver((entries) => {
               entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            @this.loadMore();
                        }
                    })
                },
                {
                    //threshold: 0.5, // 50% of the element visible, 0 ... 1
                    rootMargin: '100px',
                });
            observer.observe(this.$el);
        },
    }" x-init="observe()">

    </div>
</div>
