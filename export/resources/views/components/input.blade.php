@props([
    'id',
    'name',
    'type' => 'text',
    'autocomplete' => null,
    'required' => false,
    'placeholder' => null,
    'variant' => 'default',
    'size' => 'md',
    'color' => 'light',
    'base' => 'block w-full rounded-md px-3.5 py-2 text-base outline outline-1 -outline-offset-1',
    'variants' => [
        'default' => 'bg-white text-gray-900 outline-gray-300 placeholder:text-gray-400 focus:outline-indigo-600',
        'placeholder' => 'bg-white/5 text-white outline-white/10 placeholder:text-gray-500 focus:outline-indigo-500',
    ],
    'sizes' => [
        'sm' => 'text-sm py-1.5 px-2.5',
        'md' => 'text-base py-2 px-3.5',
        'lg' => 'text-lg py-3 px-4',
    ],
    'colors' => [
        'light' => 'bg-white text-gray-900',
        'dark' => 'bg-gray-900 text-white',
    ],
])

@php 
    $classes = implode(' ', [
        $base,
        $variants[$variant],
        $sizes[$size],
        $colors[$color],
    ]);
@endphp

<input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    {{ $autocomplete ? "autocomplete=$autocomplete" : '' }}
    {{ $required ? 'required' : '' }}
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => $classes]) }}
>