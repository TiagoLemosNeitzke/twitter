<div class="text-white text-lg">
    @foreach ($tweets as $tweet)
        <div class="flex p-4 border-[#2f3336] bg-transparent hover:bg-gray-200 hover:bg-opacity-10 border-b-[0.625px]">
           <div class="mr-2">
                <img src="{{ Vite::asset('storage/app/'.auth()->user()->avatar) }}" alt="avatar" class="rounded-full mr-2" width="50" height="50">
           </div>

            <div class="w-full">
                <div class="flex justify-between w-full">
                    <div>
                        <span class="text-white font-bold text-base flex items-center space-x-2">
                            <span>{{ $tweet->createdBy->name }}</span>
                           @if ($tweet->createdBy->subscribed('default'))
                                <x-icons.twitter-blue class="w-4 h-4 fill-sky-500" />
                            @endif
                        </span>
                        <span class="text-sm text-neutral-500 font-semibold">
                            @Lemos . Apr 25
                        </span>
                        <div>
                            {{--todo: add buttons actions--}}
                        </div>
                    </div>
                </div>
                <div>
                    {{ $tweet->body }}
                </div>
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
