<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <title>{{ $appTitle }}</title>
    <meta name="description" content="Administration de l'application.">

    {{-- NO INDEX --}}
    <meta name="robots" content="noindex, nofollow">

    <link href="{{ asset('_keenthemes/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_keenthemes/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @vite(['resources/scss/app.scss'])

    {{ $styles ?? '' }}
</head>
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
<script>
    var defaultThemeMode = '{{ auth()->user()?->theme_mode?->value ?? \App\Enums\ThemeMode::SYSTEM }}';
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

<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        <x-layouts.aside/>

        <div class="wrapper d-flex flex-column flex-row-fluid @if(!$title) pt-20 @endif" id="kt_wrapper">
            <x-layouts.header/>
            @if(isset($title) || isset($subtitle))
                <x-layouts.toolbar :title="$title" :subtitle="$subtitle">
                    {{ $toolbar ?? '' }}
                </x-layouts.toolbar>
            @endif

            <div class="content d-flex flex-column flex-column-fluid @if(!$title) pt-12 @else pt-0 @endif"
                 id="kt_content">
                <div id="kt_content_container" class="container-xxl">
                    {{ $slot }}
                </div>
            </div>

            <x-layouts.footer/>
        </div>
    </div>
</div>

<script src="{{ asset('_keenthemes/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('_keenthemes/js/scripts.bundle.js') }}"></script>
@vite(['resources/js/app.js'])

{{ $scripts ?? '' }}
</body>
</html>
