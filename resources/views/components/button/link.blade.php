<a {{ $attributes->merge(['class'=>'btn '.$myClass]) }} >
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    @if($btnIcon === false)
        {{ $slot }}
    @endif
</a>
