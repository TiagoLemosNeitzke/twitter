<div class="rounded-lg bg-white p-8 shadow-lg">
    <div class="flex flex-col w-60 mb-4">
        <textarea class="border-slate-400 rounded-md" wire:model='body' placeholder="What's happening?"></textarea>

        <x-input-error messages="{{ $errors->first('body') }}"/>
    </div>

    <x-primary-button class="bg-slate-400" wire:click='tweet'>
        Tweet
    </x-primary-button>
</div>
