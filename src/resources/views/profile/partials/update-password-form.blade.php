<section>
    <header>
        <h2 class="section-title">
            {{ __('ACTUALIZAR CONTRASEÑA') }}
        </h2>

        <p class="section-subtitle">
            {{ __('Asegúrate de que tu cuenta esté utilizando una contraseña larga y aleatoria para mantenerse segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="form-section">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Contraseña Actual')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="input-text" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="input-error" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nueva Contraseña')" />
            <x-text-input id="update_password_password" name="password" type="password" class="input-text" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="input-error" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input-text" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="input-error" />
        </div>

        <div class="form-actions">
            <x-primary-button class="custom-primary-button">
            {{ __('Guardar') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
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