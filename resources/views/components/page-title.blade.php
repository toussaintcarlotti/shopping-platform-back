<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ $title }}
                <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                @if($subtitle)<span class="text-muted fs-7 fw-bold mt-2">{{ $subtitle }}</span>@endif
            </h1>
        </div>

        <div class="d-flex align-items-center gap-2 gap-lg-3">
            {{ $slot }}
        </div>
        </div>
</div>
