@if ($errors)
    <x-alert.classic type="danger" {{ $attributes->merge() }} title="Erreur">
        <x-slot name="icon">
            <i class="bi bi-exclamation-octagon-fill fs-2x text-danger"></i>
        </x-slot>

        <div class="d-flex flex-column">
            @foreach ($errors as $error)
            <li class="d-flex align-items-center py-2">
                <span class="bullet me-5 bg-danger"></span> {{ $error }}
            </li>
            @endforeach
        </div>
    </x-alert.classic>
@endif
