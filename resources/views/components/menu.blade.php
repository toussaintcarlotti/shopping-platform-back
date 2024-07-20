@props([
    'column' => false
])

<div {{ $attributes->merge(['class' => 'menu menu-rounded menu-title-gray-600 menu-state-bg '.($column ? 'menu-column' : '')]) }}>
    {{ $slot }}
</div>
