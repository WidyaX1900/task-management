@props(['type' => 'warning'])

@php
    $color = '';
    
    if ($type === 'success') {
        $color = 'bg-green-200 text-green-700';
    } elseif ($type === 'danger') {
        $color = 'bg-red-200 text-red-700';
    } elseif ($type === 'warning') {
        $color = 'bg-amber-200 text-amber-700';
    }
@endphp

<div class="px-2 py-1 rounded-2xl flex items-center text-sm {{ $color }}">
    {{ $slot }}
</div>
