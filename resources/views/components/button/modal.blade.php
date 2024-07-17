<a {{ $attributes->merge(['class'=>'btn '.$myClass]) }} data-bs-toggle="modal" data-bs-target="{{ '#'.$modal }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    @if($btnIcon === false)
        {{ $slot }}
    @endif
</a>
