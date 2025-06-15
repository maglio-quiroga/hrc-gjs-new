<section class="section-delete">
    <header>
        <h2 class="section-title">
            {{ __('ELIMINAR CUENTA') }}
        </h2>

        <p class="section-subtitle">
            {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados de forma permanente. Antes de eliminar tu cuenta, por favor descarga cualquier dato o información que desees conservar.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ __('Eliminar Cuenta') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="modal-form">
            @csrf
            @method('delete')

            <h2 class="section-title">
                {{ __('¿Estás seguro de que deseas eliminar tu cuenta?') }}
            </h2>

            <p class="section-subtitle">
                {{ __('Una vez que tu cuenta sea eliminada, todos sus recursos y datos serán eliminados de forma permanente. Por favor, ingresa tu contraseña para confirmar que deseas eliminar tu cuenta de forma permanente.') }}
            </p>

            <div class="form-group">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="input-text-medium"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="input-error" />
            </div>

            <div class="form-actions-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="button-spacing-left">
                    {{ __('Eliminar Cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>


<style>
.section-delete {
    display: flex;
    flex-direction: column;
    gap: 1.5rem; 
}


.dark .section-title {
    color: #f3f4f6;      
}

.section-subtitle {
    margin-top: 0.25rem; 
    font-size: 0.875rem; 
    color: #4b5563;     
}
.dark .section-subtitle {
    color: #9ca3af;      
}

.modal-form {
    padding: 1.5rem; 
}

.form-group {
    margin-top: 1.5rem; 
}

.input-text-medium {
    margin-top: 0.25rem;
    display: block;
    width: 75%;         
}

.input-error {
    margin-top: 0.5rem; 
}

.form-actions-end {
    margin-top: 1.5rem;
    display: flex;
    justify-content: flex-end;
    gap: 0.75rem;
}

.button-spacing-left {
    margin-left: 0.75rem;       
  padding: 0.75rem 1.5rem;    
  font-size: 1rem;            
  border: 2px solid #4f46e5;  
  border-radius: 0.5rem;      
  background-color: #4f46e5;  
  color: white;               /* Texto blanco */
  cursor: pointer;
  transition: background-color 0.2s, border-color 0.2s;

}

</style>