<button {{ $attributes->merge(['class'=>'rounded-md mx-80 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-[#2b2a2a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600', 'type'=> 'submit'] ) }}>
    {{ $slot }}
</button>