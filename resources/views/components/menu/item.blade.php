@props(['route', 'label' => null, 'icon'])

<div>
    <a href="{{ $route }}"
       class="bg-transparent hover:bg-gray-200 hover:bg-opacity-10 rounded-full p-2 inline-block space-x-2">
        <div class="flex items-center space-x-4">
            <div>
                {{ $icon }}
            </div>

            @if($label)
                <div class="font-bold text-lg pr-6">{{ $label }}</div>
            @endif
        </div>
    </a>
</div>
