<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
     class="menu-item menu-lg-down-accordion me-lg-1 @if($active) show here @endif"
    {{ $attributes->merge(['data-kt-menu-placement'=>'bottom-start']) }}>
    <span class="menu-link py-3">
         @if($icon)
            <span class="menu-icon">
                {{ $icon }}
            </span>
        @endif
        <span class="menu-title">{{ $name }}</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            {{ $slot }}
    </div>
</div>
