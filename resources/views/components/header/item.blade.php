<div class="menu-item">
    <a class="menu-link {{ url()->current() === $href ? "active" : "" }} py-3" href="{{ $href }}">
        @if(isset($icon))
            <span class="menu-icon">
                <i class="bi {{ $icon }} fs-3"></i>
            </span>
        @endif
        <span class="menu-title">{{ $title }}</span>
    </a>
</div>
