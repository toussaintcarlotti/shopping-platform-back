<div>
    <div class="form-check form-check-custom form-check-solid">
        <input id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-check-input ' . $invalid]) }} @checked(old($name, $value)) type="checkbox" value="1"/>
        @if($label)
            <label class="form-check-label" for="flexCheckDefault">
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
