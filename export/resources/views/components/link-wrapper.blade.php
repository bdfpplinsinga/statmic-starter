@props([
    'link' => null,
    'target_blank' => 'self',
    'class' => '',
    'aria_label' =>  $aria_label ?? 'Bezoek'
])

<{{ 'a' }}
    href="{{ $link }}"
    target="{{ $target_blank }}"
    class='overflow-hidden {{ $class }}'
    aria-label="{{ $aria_label }}"
>
    {{ $slot }}
</{{ 'a' }}>