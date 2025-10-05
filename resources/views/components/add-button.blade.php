@props(['id'])

<button type="button" id="{{ $id }}" class="py-2 px-3 transition-all duration-75 bg-blue-600 active:bg-blue-800 active:scale-90 rounded font-bold flex items-center">
    <span class="material-icons me-1">
        add
    </span>
    {{ $slot }}
</button>
