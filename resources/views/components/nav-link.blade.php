@props(['active' => false, 'type' => 'a'])

@if ($type == 'a')
    <a class="{{$active ? 'bg-[#fafafa] text-[#2b2a2a]' : 'text-gray-300 hover:bg-[#5b5340] hover:text-white'}} rounded-md px-3 py-2 text-sm font-bold" 
        aria-current="{{request()->is('/') ? 'page' : 'false' }}"
        {{$attributes}}
    >{{$slot}}</a>
@else
    <button class="{{$active ? 'bg-[#fafafa] text-[#2b2a2a]' : 'text-gray-300 hover:bg-[#5b5340] hover:text-white'}} rounded-md px-3 py-2 text-sm font-bold" 
        aria-current="{{request()->is('/') ? 'page' : 'false' }}"
        {{$attributes}}
    >{{$slot}}</button>
@endif




