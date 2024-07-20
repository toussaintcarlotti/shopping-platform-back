@props(['label' => null])

<div class="form-check form-check-custom form-check-solid">
    <input {{ $attributes->merge(['class'=>'form-check-input']) }} type="checkbox"/>
    @if($label)
        <label class="form-check-label" for="flexCheckDefault">
            {{ $label }}
        </label>
    @endif
</div>
