<section class="section-delete">
    <header>
        <h2 class="section-title">
            {{ __('ELIMINAR CUENTA') }}
        </h2>

        <p class="section-subtitle">
            {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados de forma permanente. Antes de eliminar tu cuenta, por favor descarga cualquier dato o información que desees conservar.') }}
        </p>
    </header>

    <!-- Checkbox oculto para controlar la visibilidad -->
    <input type="checkbox" id="confirm-toggle" />

    <!-- Botón eliminar original alineado a la derecha -->
    <div class="delete-button-container">
        <label for="confirm-toggle" class="custom-danger-button" role="button" tabindex="0">
            {{ __('Eliminar Cuenta') }}
        </label>
    </div>

    <!-- Formulario de confirmación -->
    <form method="post" action="{{ route('profile.destroy') }}" class="delete-confirm-form">
        @csrf
        @method('delete')

        <h2 class="delete-confirm-title">
            {{ __('¿Estás seguro de que deseas eliminar tu cuenta?') }}
        </h2>

        <p class="delete-confirm-text">
            {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados de forma permanente. Por favor, ingresa tu contraseña para confirmar que deseas eliminar tu cuenta de forma permanente.') }}
        </p>

        <div class="form-group">
            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="modal-input"
                placeholder="{{ __('Password') }}"
                required
            />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="input-error" />
        </div>

        <div class="form-actions">
            <!-- Cancelar desmarca el checkbox -->
            <label for="confirm-toggle" class="custom-cancel-button" role="button" tabindex="0">
                {{ __('Cancelar') }}
            </label>

            <button type="submit" class="custom-danger-button">
                {{ __('Eliminar Cuenta') }}
            </button>
        </div>
    </form>
</section>
