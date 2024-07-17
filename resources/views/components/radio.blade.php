@props(['label' => null])
<div class="form-check form-check-custom form-check-solid">
    <input  {{ $attributes->merge(['class'=>'form-check-input']) }} type="radio" />
    @if($label)
        <label class="form-check-label" for="flexRadioDefault">
            {{ $label }}
        </label>
    @endif
</div>
