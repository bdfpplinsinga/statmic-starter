@props([
    'color' => 'dark',
    'size' => 'md',
    'as' => 'p',
    'weight' => 'normal',
    'colors' => [
        'dark' => 'text-gray-800',
        'light' => 'text-gray-300',
        'gray' => 'text-gray-600',
        'light-gray' => 'text-gray-400',
        'primary' => 'text-teal-500',
        'white' => 'text-white', 
    ],
    'sizes' => [
        'sm' => 'text-sm',
        'md' => 'text-base/7',
        'lg' => 'text-lg',
        'xl' => 'text-xl/8',
    ],
    'weights' => [
        'normal' => 'font-normal',
        'medium' => 'font-medium',
        'semibold' => 'font-semibold',
        'bold' => 'font-bold',
    ],
])

@php
    $classes = implode(' ', [$colors[$color], $sizes[$size], $weights[$weight]]);
@endphp

<{{ $as }} {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>