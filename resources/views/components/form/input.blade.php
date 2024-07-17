<div class="position-relative">
    <input id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class'=>'form-control '.$invalid]) }} value="{{ old($name, $value) }}" />
    @if(!$invalid)
        <div class="cursor-pointer position-absolute translate-middle-y top-50 end-0 me-5"
             onclick="previousElementClick(this)">
        <span class="svg-icon svg-icon-2hx">
             <i class="{{ $icon }}"></i>
        </span>
        </div>
    @endif

    @error($nameError, $bag)
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<script>
    function previousElementClick(el) {
        el.previousElementSibling.focus();
        el.previousElementSibling.click();
    }
</script>
