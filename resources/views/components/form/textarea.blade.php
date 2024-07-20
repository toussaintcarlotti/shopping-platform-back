<div>
    <textarea id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-control' . $invalid]) }} data-kt-autosize="true">{{ old($name, $slot) }}</textarea>
    @error($nameError, $bag)
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

