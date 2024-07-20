<x-layouts.app>
    <div class="card">
        <div class="card-body">
            <x-form method="POST" action="/user/confirm-password" class="form w-100" novalidate="novalidate">

                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">
                        {{ __('Confirmer mot de passe') }}
                    </h1>

                    <div class="text-gray-400 fw-bold fs-4">
                        {{ __("Il s'agit d'une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.") }}
                    </div>
                </div>

                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Mot de passe') }}</label>
                    <x-form.input type="password" name="password" autocomplete="current-password" required autofocus/>
                </div>

                <div class="d-flex flex-wrap justify-content-center pb-lg-0 gap-3">
                    <x-button.classic type="submit">{{ __('Confirmer') }}</x-button.classic>
                    <x-button.link light href="{{ route('user.edit') }}">{{ __('Annuler') }}</x-button.link>
                </div>
            </x-form>

        </div>
    </div>
</x-layouts.app>

