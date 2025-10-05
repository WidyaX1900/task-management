@props(['id'])

<div id="{{ $id }}" class="fixed top-0 left-0 w-full h-full px-8 z-50 bg-black/85 flex justify-center items-center transition-transform duration-300 translate-y-full opacity-0">
    <div class="bg-gray-900 p-3 w-full rounded border-2 border-gray-600 drop-shadow">
        {{ $slot }}
    </div>
</div>
