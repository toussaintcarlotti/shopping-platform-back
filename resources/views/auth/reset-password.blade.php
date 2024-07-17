<x-layouts.guest>
    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <div class="w-lg-550px w-100 bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <x-form action="{{ route('password.update') }}" method="POST">
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <input type="hidden" name="email" value="{{ request()->get('email') }}">
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">{{ __('Réinitialiser le Mot de passe') }}</h1>
                </div>
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6">{{ __('Mot de passe') }}</label>
                        <div class="position-relative mb-3">
                            <x-form.input type="password" name="password" autocomplete="off" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>

                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                    </div>
                    <div class="text-muted">
                        {{ __('Utilisé au moins 8 caractères avec lettres, nombres &amp; symboles') }}
                    </div>
                </div>

                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-dark fs-6">{{ __('Confirmer Mot de passe') }}</label>
                    <x-form.input type="password" name="password_confirmation" autocomplete="off" />
                </div>

                <div class="text-center">
                    <x-button.classic type="submit">{{ __('Valider') }}</x-button.classic>
                </div>
            </x-form>
        </div>
    </div>
</x-layouts.guest>
