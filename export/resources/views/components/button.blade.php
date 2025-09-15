@props([
    'variant' => 'primary',
    'size' => 'md',
    'radius' => 'lg',
    'as' => 'button',
    'url' => null,
    'icon' => false,
    'base' => [
        'inline-flex items-center gap-1 justify-center font-semibold rounded-md group cursor-pointer whitespace-nowrap',
        'transition-all duration-300 ease-in-out',
    ],
    'variants' => [
        'primary' => 'bg-black text-white hover:text-white/80 hover:bg-black/90',
        'secondary' => 'bg-teal-500 hover:bg-teal-600 text-teal-900',
        'white' => 'bg-slate-100 text-slate-800 hover:bg-teal-200-700 hover:text-slate-900',
    ],
    'sizes' => [
        'sm' => 'px-3 py-1.5',
        'md' => 'px-4 py-2',
        'lg' => 'px-6 py-3',
        'xl' => 'px-8 py-4',
    ],
    'icon_colors' => [
        'primary' => 'fill-current',
        'secondary' => 'fill-current',
        'white' => 'fill-current',
    ],
    'icon_sizes' => [
        'sm' => 'size-4',
        'md' => 'size-5',
        'lg' => 'size-6',
        'xl' => 'size-7',
    ],
])

@php
    $classes = implode(' ', array_merge($base, [$variants[$variant], $sizes[$size]]));
    $icon_classes = implode(' ', [$icon_colors[$variant], $icon_sizes[$size]]);
@endphp

@if ($url)
    <a href="{{ $url }}" {{ $attributes->twMerge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if ($icon)
            <s:svg src="{{$icon}}" class="transition-transform ease-in-out duration-300 shrink-0 group-hover:translate-x-2 {{ $icon_classes }}" />
        @endif
    </a>
@else
    <{{ $as }} {{ $attributes->twMerge(['class' => $classes]) }}>
        {{ $slot }}
        @if ($icon)
            <s:svg src="{{$icon}}" class="transition-transform ease-in-out duration-300 shrink-0 group-hover:translate-x-2 {{ $icon_classes }}" />
        @endif
    </{{ $as }}>
@endif