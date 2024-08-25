@props(['active' => false])

    <a 
class="{{ $active ? 'bg-red-900 text-white': 'text-gray-300 hover:bg-red-700 hover:text-white'}} rounded-md px-3 py-2 text-md font-medium " 
aria-current="{{ $active ? 'page': 'false'}}"
{{ $attributes}}
>{{$slot}}</a>
