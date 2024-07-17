<x-layouts.app title="{{ __('Profil') }}" subtitle="informations">
    @if(session()?->has('status'))
        <x-alert.classic type="success">
            Modification enregistrée avec succès.
        </x-alert.classic>
    @endif

    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __('Informations de profil') }}</h3>
            </div>
        </div>
        <div id="kt_account_profile_details" class="collapse show">
            <x-form id="kt_account_profile_details_form" class="form"
                    action="{{ route('user-profile-information.update') }}" method="PUT">
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                 style="background-image: url({{ auth()->user()->avatar }})">
                                <div class="image-input-wrapper w-60px h-60px"
                                     style="background-image: url({{ auth()->user()->avatar }})"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label for="name" class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('Nom') }}</label>
                        <div class="col-lg-8 fv-row">
                            <x-form.input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}"
                                          placeholder="{{ __('Nom') }}"/>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label for="email"
                               class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('Email') }}</label>
                        <div class="col-lg-8 fv-row">
                            <x-form.input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}"
                                          placeholder="{{ __('Email') }}"/>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <x-button.classic type="submit">
                        {{ __('Sauvegarder') }}
                    </x-button.classic>
                </div>
            </x-form>
        </div>
    </div>

    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_settings">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{ __("Sécurité") }}</h3>
            </div>
        </div>
        <div id="kt_account_settings" class="collapse show">
            <div class="card-body border-top p-9">
                <x-form novalidate="novalidate" method="PUT"
                              action="{{ route('user-password.update') }}">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}"/>
                    <h3 class="fw-bolder mb-5">{{ __('Modifier mon mot de passe') }}</h3>
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="current_password"
                                       class="form-label fs-6 fw-bolder mb-3">{{ __("Mot de passe") }}</label>
                                <x-form.input bag="updatePassword" type="password" name="current_password"
                                                    id="current_password"/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="password"
                                       class="form-label fs-6 fw-bolder mb-3">{{ __("Nouveau Mot de passe") }}</label>
                                <x-form.input bag="updatePassword" type="password" name="password"
                                                    id="password"/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row mb-0">
                                <label for="password_confirmation"
                                       class="form-label fs-6 fw-bolder mb-3">{{ __("Nouveau Mot de passe") }}</label>
                                <x-form.input bag="updatePassword" type="password" name="password_confirmation"
                                                    id="password_confirmation"/>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <x-button.classic type="submit">
                            {{ __('Sauvegarder') }}
                        </x-button.classic>
                        <x-button.classic type="reset" light>{{ __('Annuler') }}</x-button.classic>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</x-layouts.app>
