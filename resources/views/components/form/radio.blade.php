@props(['label' => null])
<div>
    <div class="form-check form-check-custom form-check-solid">
        <input id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-check-input ' . $invalid]) }} @checked(old($name, $value)) type="radio"/>
        @if($label)
            <label class="form-check-label" for="flexRadioDefault">
                {{ $label }}
            </label>
        @endif
    </div>
    @error($nameError, $bag)
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
