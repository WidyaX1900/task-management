@props(['type' => 'ongoing'])

@if ($type === 'ongoing')
    <div class="px-2 py-1 bg-amber-200 text-amber-700 rounded-2xl flex items-center text-sm">
        {{ $slot }}
    </div>    
@elseif ($type === 'success')
    <div class="px-2 py-1 bg-green-200 text-green-700 rounded-2xl flex items-center text-sm">
        {{ $slot }}
    </div>
@elseif ($type === 'danger')
    <div class="px-2 py-1 bg-red-200 text-red-700 rounded-2xl flex items-center text-sm">
        {{ $slot }}
    </div>
@else
    <div class="px-2 py-1 rounded-2xl flex items-center text-sm">
        {{ $slot }}
    </div>
@endif

