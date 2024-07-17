<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
    <a class="menu-link px-5">
        <span class="menu-title position-relative">{{ __('Langue') }}
            <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
               @if(app()->getLocale() === 'en')
                    English
                    <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('metronic/media/flags/united-states.svg') }}" alt="en_flag">
                @elseif(app()->getLocale() === 'fr')
                    Français
                    <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('metronic/media/flags/france.svg') }}" alt="fr_flag">
                @endif
            </span>
        </span>
    </a>
    <div class="menu-sub menu-sub-dropdown w-175px py-4" style="">
        <div class="menu-item px-3">
            <a href="{{ route('greeting', 'en') }}" class="menu-link d-flex px-5 @if(app()->getLocale() === 'en')active @endif">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset('metronic/media/flags/united-states.svg') }}" alt="">
                </span>English
            </a>
        </div>
        <div class="menu-item px-3">
            <a href="{{ route('greeting', 'fr') }}" class="menu-link d-flex px-5 @if(app()->getLocale() === 'fr')active @endif">
                <span class="symbol symbol-20px me-4">
                    <img class="rounded-1" src="{{ asset('metronic/media/flags/france.svg') }}" alt="">
                </span>Français
            </a>
        </div>
    </div>
</div>
