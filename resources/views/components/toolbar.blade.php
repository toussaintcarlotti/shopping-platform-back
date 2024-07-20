<div class="toolbar py-2" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
        <div class="flex-grow-1 flex-shrink-0 me-5">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{ $title }}
                    @if($subtitle)
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">{{ $subtitle }}</small>
                    @endif
                </h1>
            </div>
        </div>
        <div class="d-flex align-items-center flex-wrap">
            <div class="flex-shrink-0 me-2">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
