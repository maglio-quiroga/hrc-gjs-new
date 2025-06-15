<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="profile-header">
   
        </h2>
    </x-slot>

    <div class="profile-wrapper">
        <div class="profile-container">
            <div class="profile-card">
                <div class="profile-form-wrapper">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="profile-card">
                <div class="profile-form-wrapper">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="profile-card">
                <div class="profile-form-wrapper">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




<style>
.profile-wrapper {
    padding-top: 3rem;
    /* py-12 */
    padding-bottom: 3rem;
    display: flex;
    justify-content: center;
    /* Centrado horizontal */
    align-items: center;
    /* Centrado vertical */
    min-height: 100vh;
    /* Ocupa toda la altura de la pantalla */
}

.profile-container {
    max-width: 80rem;
    /* max-w-7xl */
    padding-left: 1.5rem;
    /* sm:px-6 */
    padding-right: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    /* space-y-6 */
    width: 100%;
    align-items: center;
    /* Centrado de contenido dentro del contenedor */
}

.profile-card {
    padding: 1rem;
    /* p-4 */
    background-color: #ffffff;
    /* bg-white */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    /* sombra más marcada */
    border-radius: 0.5rem;
    /* sm:rounded-lg */
    width: 100%;
    max-width: 36rem;
    /* Asegura que no se estire demasiado */
}

/* modo oscuro */
.dark .profile-card {
    background-color: #1f2937;
    /* dark:bg-gray-800 */
}

@media (min-width: 640px) {
    .profile-card {
        padding: 2rem;
        /* sm:p-8 */
    }
}

/* seccion de eliminar cuenta */
.custom-danger-button {
    background-color: #b91c1c;
    color: white;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.custom-danger-button:hover {
    background-color: #991b1b;
}

.custom-danger-button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(185, 28, 28, 0.4);
    /* rojo con transparencia */
}

/* Contenedor del formulario */
.delete-confirm-form {
    margin-top: 1.5rem;
    background: #ffffff;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 420px;
    display: none;
}

/* Título del modal */
.delete-confirm-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 1rem;
}

/* Texto informativo */
.delete-confirm-text {
    font-size: 1rem;
    color: #4b5563;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

/* Grupo de input */
.form-group {
    margin-bottom: 1.5rem;
}

/* Input de contraseña */
.modal-input {
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 1rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.modal-input:focus {
    border-color: #4b9011;
    box-shadow: 0 0 0 3px rgba(75, 144, 17, 0.2);
    outline: none;
}

/* Error de validación */
.input-error {
    color: #dc2626;
    font-size: 0.875rem;
    margin-top: 0.5rem;
}

/* Botones en fila */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    margin-top: 1.5rem;
}

.custom-cancel-button {
    background-color: #d97706;
    /* amarillo oscuro (amber-600) */
    color: white;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;
}

.custom-cancel-button:hover {
    background-color: #b45309;
    /* amarillo más oscuro al hover (amber-700) */
}

.custom-cancel-button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.4);
    /* sombra con transparencia */
}

/* Contenedor para alinear el botón eliminar a la derecha */
.delete-button-container {
    display: flex;
    justify-content: flex-end;
    margin-top: 1rem;
}

/* Checkbox oculto que controla la visualización */
#confirm-toggle {
    display: none;
}

/* Mostrar botón eliminar cuando checkbox NO está marcado */
#confirm-toggle:not(:checked)~.delete-button-container {
    display: flex;
}

/* Ocultar botón eliminar cuando checkbox está marcado */
#confirm-toggle:checked~.delete-button-container {
    display: none;
}

/* Mostrar formulario confirmación cuando checkbox está marcado */
#confirm-toggle:checked~.delete-confirm-form {
    display: block;
}

/*fin seccion de eliminar*/

/*seccion update info*/
.custom-primary-button {
    background-color: #4b9011;
    color: white;
    padding: 0.75rem 1.5rem;
    /* Tamaño más grande */
    font-size: 1rem;
    border: none;
    border-radius: 0.5rem;
    /* Bordes redondeados */
    cursor: pointer;
    transition: background-color 0.2s ease, box-shadow 0.2s ease;

    &:hover {
        background-color: #3a720d;
        /* Versión más oscura al pasar el mouse */
    }

    &:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(75, 144, 17, 0.4);
    }
}

.section-title {
    font-size: 1.5rem;
    /* text-lg */
    font-weight: 500;
    /* font-medium */
    color: #111827;
    /* text-gray-900 */
}

.dark .section-title {
    color: #f3f4f6;
    /* text-gray-100 */
}

.section-subtitle {
    margin-top: 0.25rem;
    /* mt-1 */
    font-size: 1rem;
    /* text-sm */
    color: #4b5563;
    /* text-gray-600 */
}

.dark .section-subtitle {
    color: #9ca3af;
    /* text-gray-400 */
}

.form-section {
    margin-top: 1.5rem;
    /* mt-6 */
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    /* space-y-6 */
}

.input-text {
    margin-top: 0.25rem;
    /* mt-1 */
    display: block;
    width: 100%;
    padding: 0.75rem 1rem;
    /* Espaciado interno para hacerlo más grande */
    font-size: 1rem;
    /* Tamaño de fuente más legible */
    border: 1px solid #ccc;
    /* Borde más definido */
    border-radius: 0.5rem;
    /* Bordes redondeados */
    transition: border-color 0.2s, box-shadow 0.2s;
}

.input-error {
    margin-top: 0.5rem;
    /* mt-2 */
}

.verification-warning {
    font-size: 0.875rem;
    /* text-sm */
    margin-top: 0.5rem;
    /* mt-2 */
    color: #1f2937;
    /* text-gray-800 */
}

.dark .verification-warning {
    color: #e5e7eb;
    /* text-gray-200 */
}

.verify-button {
    text-decoration: underline;
    font-size: 0.875rem;
    /* text-sm */
    color: #4b5563;
    /* text-gray-600 */
    border-radius: 0.375rem;
    /* rounded-md */
    outline: none;
    transition: all 0.2s;
}

.verify-button:hover {
    color: #111827;
    /* text-gray-900 */
}

.dark .verify-button {
    color: #9ca3af;
    /* dark:text-gray-400 */
}

.dark .verify-button:hover {
    color: #f3f4f6;
    /* dark:hover:text-gray-100 */
}

.verify-button:focus {
    outline: none;
    box-shadow: 0 0 0 2px #6366f1;
    /* focus:ring-indigo-500 */
}

.dark .verify-button:focus {
    box-shadow: 0 0 0 2px #6366f1, 0 0 0 4px #1f2937;
    /* dark:focus:ring-offset-gray-800 */
}

.verification-sent {
    margin-top: 0.5rem;
    /* mt-2 */
    font-size: 0.875rem;
    /* text-sm */
    font-weight: 500;
    /* font-medium */
    color: #16a34a;
    /* text-green-600 */
}

.dark .verification-sent {
    color: #4ade80;
    /* text-green-400 */
}

.form-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.saved-message {
    font-size: 0.875rem;
    /* text-sm */
    color: #4b5563;
    /* text-gray-600 */
}

.dark .saved-message {
    color: #9ca3af;
    /* text-gray-400 */ }
/*fin seccion update info*/

/*seccion update password*/
.dark .section-title {
    color: #f3f4f6;
    /* text-gray-100 */
}

.section-subtitle {
    margin-top: 0.25rem;
    /* mt-1 */
    font-size: 0.875rem;
    /* text-sm */
    color: #4b5563;
    /* text-gray-600 */
}

.dark .section-subtitle {
    color: #9ca3af;
    /* text-gray-400 */
}

.form-section {
    margin-top: 1.5rem;
    /* mt-6 */
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    /* space-y-6 */
}



.form-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    /* gap-4 */
}

.saved-message {
    font-size: 0.875rem;
    /* text-sm */
    color: #4b5563;
    /* text-gray-600 */
}

.dark .saved-message {
    color: #9ca3af;
    /* text-gray-400 */
}
/*fin seccion update password*/
</style>