<section>
    <header>
        <h2 class="section-title">
            {{ __('INFORMACIÓN DEL PERFIL') }}
        </h2>

        <p class="section-subtitle">
            {{ __("Actualiza la información de tu perfil y dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="form-section">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="input-text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="input-error" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="input-text" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="input-error" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="verification-warning">
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="verify-button">
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="verification-sent">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="form-actions">
           <x-primary-button class="custom-primary-button">
            {{ __('Guardar') }}
            </x-primary-button>
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="saved-message"
                >{{ __('Almacenado.') }}</p>
            @endif
        </div>
    </form>
</section>


<style>

    .custom-primary-button {
  background-color: #4b9011;
  color: white;
  padding: 0.75rem 1.5rem;    /* Tamaño más grande */
  font-size: 1rem;
  border: none;
  border-radius: 0.5rem;       /* Bordes redondeados */
  cursor: pointer;
  transition: background-color 0.2s ease, box-shadow 0.2s ease;

  &:hover {
    background-color: #3a720d; /* Versión más oscura al pasar el mouse */
  }

  &:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(75, 144, 17, 0.4);
  }
}

    .section-title {
    font-size: 1.5rem;           /* text-lg */
    font-weight: 500;              /* font-medium */
    color: #111827;                /* text-gray-900 */
}

.dark .section-title {
    color: #f3f4f6;                /* text-gray-100 */
}

.section-subtitle {
    margin-top: 0.25rem;           /* mt-1 */
   font-size: 1rem;           /* text-sm */
    color: #4b5563;                /* text-gray-600 */
}

.dark .section-subtitle {
    color: #9ca3af;                /* text-gray-400 */
}

.form-section {
    margin-top: 1.5rem;            /* mt-6 */
    display: flex;
    flex-direction: column;
    gap: 1.5rem;                   /* space-y-6 */
}

.input-text {
    margin-top: 0.25rem;     /* mt-1 */
  display: block;
  width: 100%;
  padding: 0.75rem 1rem;   /* Espaciado interno para hacerlo más grande */
  font-size: 1rem;         /* Tamaño de fuente más legible */
  border: 1px solid #ccc;  /* Borde más definido */
  border-radius: 0.5rem;   /* Bordes redondeados */
  transition: border-color 0.2s, box-shadow 0.2s;
}

.input-error {
    margin-top: 0.5rem;            /* mt-2 */
}

.verification-warning {
    font-size: 0.875rem;           /* text-sm */
    margin-top: 0.5rem;            /* mt-2 */
    color: #1f2937;                /* text-gray-800 */
}

.dark .verification-warning {
    color: #e5e7eb;                /* text-gray-200 */
}

.verify-button {
    text-decoration: underline;
    font-size: 0.875rem;           /* text-sm */
    color: #4b5563;                /* text-gray-600 */
    border-radius: 0.375rem;       /* rounded-md */
    outline: none;
    transition: all 0.2s;
}

.verify-button:hover {
    color: #111827;                /* text-gray-900 */
}

.dark .verify-button {
    color: #9ca3af;                /* dark:text-gray-400 */
}

.dark .verify-button:hover {
    color: #f3f4f6;                /* dark:hover:text-gray-100 */
}

.verify-button:focus {
    outline: none;
    box-shadow: 0 0 0 2px #6366f1; /* focus:ring-indigo-500 */
}

.dark .verify-button:focus {
    box-shadow: 0 0 0 2px #6366f1, 0 0 0 4px #1f2937; /* dark:focus:ring-offset-gray-800 */
}

.verification-sent {
    margin-top: 0.5rem;            /* mt-2 */
    font-size: 0.875rem;           /* text-sm */
    font-weight: 500;              /* font-medium */
    color: #16a34a;                /* text-green-600 */
}

.dark .verification-sent {
    color: #4ade80;                /* text-green-400 */
}

.form-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.saved-message {
    font-size: 0.875rem;           /* text-sm */
    color: #4b5563;                /* text-gray-600 */
}

.dark .saved-message {
    color: #9ca3af;                /* text-gray-400 */
}



</style>