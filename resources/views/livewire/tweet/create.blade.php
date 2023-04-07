<div>
    <div class="flex flex-col w-60 mb-4">
        <textarea class="border-slate-400 rounded-md" wire:model='body' placeholder="What's happening?"></textarea>
        @error('body')
            <span class="text-red-300 font-bold py-2">{{ $message }}</span>
        @enderror
    </div>

    <x-primary-button class="bg-slate-400" wire:click='tweet'>
        Tweet
    </x-primary-button>
</div>
