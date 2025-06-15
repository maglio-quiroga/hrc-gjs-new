<link rel="stylesheet" href="{{ asset('profile.css') }}">

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

  
    .profile-header {
    font-weight: 600;              /* font-semibold */
    font-size: 1.25rem;            /* text-xl */
    color: #1f2937;                /* text-gray-800 */
    line-height: 1.5rem;           /* leading-tight */

    /* modo oscuro */
    /* Puedes aplicar esto con una clase .dark .profile-header si usas modo oscuro */
}

.dark .profile-header {
    color: #4b9011;                /* text-gray-200 */
}

.profile-wrapper {
    padding-top: 3rem;             /* py-12 */
    padding-bottom: 3rem;
}

.profile-container {
    max-width: 80rem;              /* max-w-7xl */
    margin-left: auto;            /* mx-auto */
    margin-right: auto;
    padding-left: 1.5rem;         /* sm:px-6 */
    padding-right: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;                  /* space-y-6 */
}

.profile-card {
    padding: 1rem;                 /* p-4 */
    background-color: #ffffff;    /* bg-white */
    box-shadow: 0 1px 3px rgba(0,0,0,0.1); /* shadow */
    border-radius: 0.5rem;        /* sm:rounded-lg */
}

/* modo oscuro */
.dark .profile-card {
    background-color: #1f2937;    /* dark:bg-gray-800 */
}

@media (min-width: 640px) {
    .profile-card {
        padding: 2rem;            /* sm:p-8 */
    }
}

.profile-form-wrapper {
    max-width: 36rem;             /* max-w-xl */
}





</style>