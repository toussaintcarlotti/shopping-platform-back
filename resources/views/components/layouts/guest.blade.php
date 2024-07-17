<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ $appTitle }}</title>

    <link href="{{ asset("metronic/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css"/>

    {{-- NO INDEX --}}
    <meta name="robots" content="noindex, nofollow">

    <link href="{{ asset('_keenthemes/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_keenthemes/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @vite(['resources/scss/app.scss'])

    {{ $styles ?? '' }}
</head>
<body id="kt_body" class="bg-body">
<script>
    var defaultThemeMode = "{{ \App\Enums\ThemeMode::SYSTEM }}";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>

<div class="d-flex flex-column flex-root" style="background-image: url({{ asset('_keenthemes/media/auth/bg.jpg') }})">
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
        <div id="kt_header" class="header align-items-stretch bg-transparent border-0">
            <div class="d-flex align-items-stretch justify-content-end flex-grow-1">
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <div class="d-flex align-items-stretch ms-1 ms-lg-3 pe-5">
                        <div class="rounded bg-white d-flex my-2 pe-2">
                            <livewire:change-theme-mode/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <a href="{{ route('dashboard') }}" class="mb-12">
                <img alt="Logo" src="{{ asset('images/logo.png') }}" class="h-40px"/>
            </a>

            {{ $slot }}
        </div>
        <div class="d-flex flex-center flex-column-auto p-10">
            <div class="d-flex align-items-center fw-bold fs-6">
                {{--
                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                --}}
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('_keenthemes/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('_keenthemes/js/scripts.bundle.js') }}"></script>
@vite(['resources/js/app.js'])

{{ $scripts ?? '' }}
</body>
</html>
