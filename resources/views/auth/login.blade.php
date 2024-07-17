<x-layouts.guest title="Connexion">
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="text-center mb-10">
                <h1 class="text-dark mb-3">Connexion</h1>
            </div>

            <div class="fv-row mb-10">
                <label for="email" class="form-label fs-6 fw-bolder text-dark">Email</label>
                <x-form.input value="{{ old('email') }}" id="email" name="email" />
            </div>

            <div class="fv-row mb-10">
                <div class="d-flex flex-stack mb-2">
                    <label for="password" class="form-label fw-bolder text-dark fs-6 mb-0">Mot de passe</label>
                    <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Mot de passe oublié ?</a>
                </div>
                <x-form.input name="password" type="password" />
            </div>
            <div class="text-center">
               <x-button.classic type="submit">
                   Connexion
               </x-button.classic>
            </div>
        </form>
    </div>
</x-layouts.guest>
