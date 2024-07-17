<button onclick="loading(this)" {{ $attributes->merge(['class'=>'load-btn btn '.$myClass]) }} type="{{ $type }}">
    @if($loader)
        <span id="loading-icon" class="svg-icon svg-icon-1 d-none">
            <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
        </span>
    @endif
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>

<script>
    function loading(btn) {
        btn.querySelector('#loading-icon').classList.remove('d-none')
        if (btn.querySelector('.base-icon') && {{ $loader }}) {
            btn.querySelector('.base-icon').classList.add('d-none')
        }

        setTimeout(function () {
            btn.querySelector('#loading-icon').classList.add('d-none')
            if (btn.querySelector('.base-icon')) {
                btn.querySelector('.base-icon').classList.remove('d-none')
            }
        }, 2000)
    }
</script>
