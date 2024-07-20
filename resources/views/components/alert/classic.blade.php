<div {{ $attributes->merge(['class'=>'alert '.$class.' alert-dismissible d-flex flex-column flex-sm-row p-3 mb-10']) }}>
    @if(isset($icon))
    <span class="svg-icon svg-icon-2hx {{ $iconClass }} me-4 mb-5 mb-sm-0 {{ $textClass }}">{{ $icon }}</span>
    @endif

    <div class="d-flex flex-column w-100">
        <h4 class="mb-2 {{ $textClass }}">{{ $title }}</h4>
        <span class="{{ $textClass }} mb-2">{{ $slot }}</span>
    </div>

    @if($dismissible)
        <a type="button" class="position-absolute position-sm-relative m-2 mt-sm-1 mb-sm-0 top-0 end-0 btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-2x svg-icon-light">
                <i class="bi bi-x fs-1 {{ $textClass }}"></i>
            </span>
        </a>
    @endif

</div>
