@props([
    'variant' => 'primary',
    'base' => [
        'relative rounded-full px-3 py-1 text-sm/6 ',
    ],
    'variants' => [
        'primary' => 'text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20',
        'secondary' => 'text-gray-400 ring-1 ring-white/10 hover:ring-white/20',
        'white' => 'bg-white text-primary-700 border-primary-700 hover:bg-primary-700 hover:text-white',
    ],
])

@php
    $classes = implode(' ', array_merge($base, [$variants[$variant]]));
@endphp

<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{$slot}}
</div>
