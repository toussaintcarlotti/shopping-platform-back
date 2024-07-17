<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
     class="menu-item {{ str_contains(url()->current(), $href) ? "here show" : "" }} menu-lg-down-accordion me-lg-1">
    <a class="menu-link  py-3" href="{{ $href }}">
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow d-lg-none"></span>
    </a>
    {{ $slot }}
</div>
