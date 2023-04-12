<div class="w-full border-y-[0.625px] border-[#38444d]">
    <div class="flex w-full flex-row pl-4 pt-2">
    <img src="{{ Vite::asset('storage/app/'.auth()->user()->avatar) }}" class="w-12 h-12 rounded-full">
        <textarea class="w-full text-xl rounded-md border-none bg-[#15202b]" wire:model='body' placeholder="What's happening?"></textarea>

        <x-input-error messages="{{ $errors->first('body') }}" />
    </div>
    <div class="flex justify-end p-4">
        <x-primary-button wire:click='createTweet' class="w-20 h-10">
            Tweet
        </x-primary-button>
    </div>
</div>
