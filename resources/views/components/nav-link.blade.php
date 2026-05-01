@props(['active'])

@php
$classes = ($active ?? false)
            ? 'relative flex items-center px-3 py-2 text-sm font-semibold text-stone-900 dark:text-white bg-stone-200/40 dark:bg-stone-800/40 rounded-lg group transition-all duration-200'
            : 'relative flex items-center px-3 py-2 text-sm font-medium text-stone-500 hover:text-stone-900 dark:text-stone-400 dark:hover:text-stone-100 hover:bg-stone-200/20 dark:hover:bg-stone-800/30 rounded-lg transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
