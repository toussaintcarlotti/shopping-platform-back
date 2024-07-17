<div {{ $attributes->merge(['class'=>'card-header mb-2']) }}>
    @if($title)
        <h3 class="card-title @if($titleBold) fw-bolder @endif">{{ __($title) }}</h3>
    @endif

    <div class="card-toolbar">
        {{ $slot }}
    </div>
</div>
