<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-full bg-sky-600 hover:bg-sky-700 font-bold flex flex-col justify-center items-center']) }}>
    {{ $slot }}
</button>
