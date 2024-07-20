<x-layouts.guest>
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="w-lg-500px w-100 bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-dark mb-3">{{ __('Mot de passe Oublié ?') }}</h1>
                <div class="text-gray-400 fw-bold fs-4">{{ __('Renseignez votre email pour réinitialiser le mot de passe.') }}</div>
            </div>

            <x-form class="w-100" method="POST" action="{{ route('password.email') }}" id="kt_password_reset_form">
                @csrf
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Email') }}</label>
                    <x-form.input type="email" name="email" />
                </div>
                <div class="d-flex gap-3 justify-content-center pb-lg-0">
                    <x-button.classic type="submit">
                        {{ __('Confirmer') }}
                    </x-button.classic>
                    <x-button.link light href="{{ route('login') }}">{{ __('Annuler') }}</x-button.link>
                </div>
            </x-form>
        </div>
    </div>

</x-layouts.guest>
