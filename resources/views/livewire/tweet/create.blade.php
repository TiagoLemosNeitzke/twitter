<div class="w-full border-y-[0.625px] border-[#38444d]">
    <div class="flex w-full flex-row pl-4 pt-2">

        <img src="{{ Vite::asset('storage/app/' . $user->avatar) }}" class="h-12 w-12 rounded-full">
        <textarea class="w-full rounded-md border-none bg-[#15202b] text-xl" wire:model='body' placeholder="What's happening?"></textarea>

        <x-input-error messages="{{ $errors->first('body') }}" />
    </div>

    <div class="flex flex-col p-4 ml-6">
        <div class=" border-b-[0.625px] pb-4 border-[#2f3336]">
            <a href="#"
                class="inline-block space-x-1 rounded-full bg-transparent p-2 hover:bg-gray-200 hover:bg-opacity-10">
                <div class="flex items-center space-x-2">
                    <div>
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-5 fill-sky-500">
                            <g>
                                <path
                                    d="M12 1.75C6.34 1.75 1.75 6.34 1.75 12S6.34 22.25 12 22.25 22.25 17.66 22.25 12 17.66 1.75 12 1.75zm-.25 10.48L10.5 17.5l-2-1.5v-3.5L7.5 9 5.03 7.59c1.42-2.24 3.89-3.75 6.72-3.84L11 6l-2 .5L8.5 9l5 1.5-1.75 1.73zM17 14v-3l-1.5-3 2.88-1.23c1.17 1.42 1.87 3.24 1.87 5.23 0 1.3-.3 2.52-.83 3.61L17 14z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="pr-4 text-md font-bold text-sky-500">
                        Every one can reply
                    </div>
                </div>
            </a>
        </div>
        <div class="flex flex-row justify-between pt-4">
            <div class="flex flex-row">
                <x-menu.item route="#">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 fill-sky-500">
                            <g>
                                <path
                                    d="M3 5.5C3 4.119 4.119 3 5.5 3h13C19.881 3 21 4.119 21 5.5v13c0 1.381-1.119 2.5-2.5 2.5h-13C4.119 21 3 19.881 3 18.5v-13zM5.5 5c-.276 0-.5.224-.5.5v9.086l3-3 3 3 5-5 3 3V5.5c0-.276-.224-.5-.5-.5h-13zM19 15.414l-3-3-5 5-3-3-3 3V18.5c0 .276.224.5.5.5h13c.276 0 .5-.224.5-.5v-3.086zM9.75 7C8.784 7 8 7.784 8 8.75s.784 1.75 1.75 1.75 1.75-.784 1.75-1.75S10.716 7 9.75 7z">
                                </path>
                            </g>
                        </svg>
                    </x-slot:icon>
                </x-menu.item>

                <x-menu.item route="#">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 fill-sky-500">
                            <g>
                                <path
                                    d="M3 5.5C3 4.119 4.12 3 5.5 3h13C19.88 3 21 4.119 21 5.5v13c0 1.381-1.12 2.5-2.5 2.5h-13C4.12 21 3 19.881 3 18.5v-13zM5.5 5c-.28 0-.5.224-.5.5v13c0 .276.22.5.5.5h13c.28 0 .5-.224.5-.5v-13c0-.276-.22-.5-.5-.5h-13zM18 10.711V9.25h-3.74v5.5h1.44v-1.719h1.7V11.57h-1.7v-.859H18zM11.79 9.25h1.44v5.5h-1.44v-5.5zm-3.07 1.375c.34 0 .77.172 1.02.43l1.03-.86c-.51-.601-1.28-.945-2.05-.945C7.19 9.25 6 10.453 6 12s1.19 2.75 2.72 2.75c.85 0 1.54-.344 2.05-.945v-2.149H8.38v1.032H9.4v.515c-.17.086-.42.172-.68.172-.76 0-1.36-.602-1.36-1.375 0-.688.6-1.375 1.36-1.375z">
                                </path>
                            </g>
                        </svg>
                    </x-slot:icon>
                </x-menu.item>

                <x-menu.item route="#">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 fill-sky-500">
                            <g>
                                <path
                                    d="M8 9.5C8 8.119 8.672 7 9.5 7S11 8.119 11 9.5 10.328 12 9.5 12 8 10.881 8 9.5zm6.5 2.5c.828 0 1.5-1.119 1.5-2.5S15.328 7 14.5 7 13 8.119 13 9.5s.672 2.5 1.5 2.5zM12 16c-2.224 0-3.021-2.227-3.051-2.316l-1.897.633c.05.15 1.271 3.684 4.949 3.684s4.898-3.533 4.949-3.684l-1.896-.638c-.033.095-.83 2.322-3.053 2.322zm10.25-4.001c0 5.652-4.598 10.25-10.25 10.25S1.75 17.652 1.75 12 6.348 1.75 12 1.75 22.25 6.348 22.25 12zm-2 0c0-4.549-3.701-8.25-8.25-8.25S3.75 7.451 3.75 12s3.701 8.25 8.25 8.25 8.25-3.701 8.25-8.25z">
                                </path>
                            </g>
                        </svg>
                    </x-slot:icon>
                </x-menu.item>

                <x-menu.item route="#">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 fill-sky-500">
                            <g>
                                <path
                                    d="M12 7c-1.93 0-3.5 1.57-3.5 3.5S10.07 14 12 14s3.5-1.57 3.5-3.5S13.93 7 12 7zm0 5c-.827 0-1.5-.673-1.5-1.5S11.173 9 12 9s1.5.673 1.5 1.5S12.827 12 12 12zm0-10c-4.687 0-8.5 3.813-8.5 8.5 0 5.967 7.621 11.116 7.945 11.332l.555.37.555-.37c.324-.216 7.945-5.365 7.945-11.332C20.5 5.813 16.687 2 12 2zm0 17.77c-1.665-1.241-6.5-5.196-6.5-9.27C5.5 6.916 8.416 4 12 4s6.5 2.916 6.5 6.5c0 4.073-4.835 8.028-6.5 9.27z">
                                </path>
                            </g>
                        </svg>
                    </x-slot:icon>
                </x-menu.item>
            </div>

            <x-primary-button wire:click='tweet' class="h-10 w-20">
                Tweet
            </x-primary-button>
        </div>
    </div>
</div>
