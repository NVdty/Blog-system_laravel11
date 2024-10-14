@props(['active' => false])
{{-- props untuk membuat active menjadi property sendiri, tidak masuk ke attributes sehingga active tidak muncul saat diinspect --}}
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}" {{$attributes}} >{{$slot}}</a>