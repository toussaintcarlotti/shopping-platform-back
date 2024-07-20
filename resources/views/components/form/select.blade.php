<div class="w-100">
    <select id="{{ $name }}" name="{{ $name }}" data-searchable="true"
            {{ $attributes->merge(['class' => 'form-select ' . $invalid]) }} @if($select2) data-control="select2" @endif
            data-placeholder="{{ $placeholder }}">
        @if($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>
    @error($nameError, $bag)
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>


