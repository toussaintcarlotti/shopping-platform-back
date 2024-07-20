<div class="menu-item">
    <a {{ $attributes->merge(['class' => 'menu-link']) }}>
        @if(isset($icon))
        <span class="menu-icon">
            {!! $icon !!}
        </span>
        @endif

        <span class="menu-title fw-bold">{{ $slot }}</span>

        @if(isset($badge))
            {!! $badge !!}
        @endif
    </a>
</div>
