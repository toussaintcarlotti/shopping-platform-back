@props(['required' => false])
<label {{ $attributes->merge(['class' => 'form-label fw-boldest '. ($required ? 'required': '')]) }}>
    {{ $slot }}
</label>
