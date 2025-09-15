@props([
    'color' => 'dark',
    'size' => 'lg',
    'as' => null,
    'weight' => 'semibold', 
    'base' => 'leading-none text-balance',
    'colors' => [
        'dark' => 'text-dark-900 ',
        'white' => 'text-white',
        'secondary' => 'text-teal-500 '
    ],
    'sizes' => [
        'xl' => 'text-7xl',
        'lg' => 'text-5xl',
        'md' => 'text-4xl',
        'base' => 'text-3xl ',
        'sm' => 'text-2xl',
        'xs' => 'text-xl',
        'xxs' => 'text-lg',
    ],
    'weights' => [
        'normal' => 'font-normal',
        'semibold' => 'font-semibold',
        'bold' => 'font-bold',
    ],
])

@php 
    $classes = implode(' ', [$base, $colors[$color], $sizes[$size], $weights[$weight]]);
@endphp


<{{ $as ?? 'h2' }} {{ $attributes->twMerge(["class" => $classes]) }}>
    {{ $slot }}
</{{ $as ?? 'h2' }}>