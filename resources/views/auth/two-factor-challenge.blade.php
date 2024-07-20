<x-layouts.guest>
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="w-lg-500px w-100 bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <x-form class="w-100" method="POST" action="/two-factor-challenge" >
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">{{ __('Entrer votre code') }}</label>
                    <x-form.input name="code" />
                </div>
                <div class="d-flex flex-wrap justify-content-center pb-lg-0 gap-3">
                    <x-button.classic type="submit">
                        <span class="indicator-label">{{ __('Confirmer') }}</span>
                    </x-button.classic>

                    <x-button.link light href="{{ route('dashboard') }}">{{ __('Annuler') }}</x-button.link>
                </div>
            </x-form>
        </div>
    </div>
</x-layouts.guest>

