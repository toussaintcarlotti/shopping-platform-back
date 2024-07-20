<div class="d-flex align-items-center ms-1 ms-lg-3">
    <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
        <i class="ki-outline ki-moon theme-dark-show fs-1"></i>
    </a>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
        <div class="menu-item px-3 my-0">
            <a wire:click="changeThemeMode('{{ \App\Enums\ThemeMode::LIGHT->value }}')" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-outline ki-night-day fs-2"></i>
                </span>
                <span class="menu-title">{{ __("Clair") }}</span>
            </a>
        </div>
        <div class="menu-item px-3 my-0">
            <a wire:click="changeThemeMode('{{ \App\Enums\ThemeMode::DARK->value }}')" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-outline ki-moon fs-2"></i>
                </span>
                <span class="menu-title">{{ __("Sombre") }}</span>
            </a>
        </div>
        <div class="menu-item px-3 my-0">
            <a wire:click="changeThemeMode('{{ \App\Enums\ThemeMode::SYSTEM->value }}')" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-outline ki-screen fs-2"></i>
                </span>
                <span class="menu-title">{{ __("System") }}</span>
            </a>
        </div>
    </div>
</div>