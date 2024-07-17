<x-layouts.guest>
    <div class="w-100">
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">
                {{ __('Verification Email') }}
            </h1>

            <div class="text-gray-400 fw-bold fs-4">
                {{ __('Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer ? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons un autre avec plaisir.') }}
            </div>

            @if (session('status') === 'verification-link-sent')
                <p class="font-medium text-sm text-gray-500 mt-4">
                    {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse électronique que vous avez fournie lors de votre inscription.') }}
                </p>
            @endif
        </div>

        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">{{ __('Renvoyer l\'e-mail de vérification') }}</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-lg btn-light-primary fw-bolder me-4">{{ __('Déconnexion') }}</button>
            </form>
        </div>
    </div>

</x-layouts.guest>
