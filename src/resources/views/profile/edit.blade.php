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

  
    .profile-header {
    font-weight: 600;              
    font-size: 1.25rem;           
    color: #1f2937;                
    line-height: 1.5rem;           

}

.dark .profile-header {
    color: #4b9011;               
}

.profile-wrapper {
    padding-top: 3rem;             
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
    margin-left: auto;            
    margin-right: auto;
    padding-left: 1.5rem;         
    padding-right: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;                 
}

.profile-card {
    padding: 1rem;                
    background-color: #ffffff;    
    box-shadow: 0 1px 3px rgba(0,0,0,0.1); 
    border-radius: 0.5rem;        
}

/* modo oscuro */
.dark .profile-card {
    background-color: #1f2937;   
}

@media (min-width: 640px) {
    .profile-card {
        padding: 2rem;            
    }
}

.profile-form-wrapper {
    max-width: 36rem;            
}





</style>