@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-base font-bold underline text-primary-50'
            : 'text-base font-medium text-primary-50';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
