@props(['icon' => false])

<div class="menu-item me-lg-1"  >
    <a {{ $attributes->merge(['class'=>'menu-link py-3 '.$active]) }} >
        @if($icon)
            <span class="menu-icon">
                {{ $icon }}
            </span>
        @endif
        <span class="menu-title">{{ $slot }}</span>
    </a>
</div>
