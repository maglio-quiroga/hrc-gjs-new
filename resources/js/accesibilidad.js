// resources/js/accesibilidad.js

document.addEventListener('DOMContentLoaded', function () {
    const btnAccesibilidad = document.getElementById('btn-accesibilidad');
    const panelAccesibilidad = document.getElementById('panel-accesibilidad');
    const toggleContraste = document.getElementById('toggle-contraste');
    const toggleFuente = document.getElementById('toggle-fuente');
    const resetAccesibilidad = document.getElementById('reset-accesibilidad');
    const body = document.body;

    // Mostrar/Ocultar panel
    btnAccesibilidad.addEventListener('click', function () {
        panelAccesibilidad.classList.toggle('hidden');
    });

    // Activar alto contraste
    toggleContraste.addEventListener('click', function () {
        body.classList.toggle('accesible-contraste');
    });

    // Activar texto grande
    toggleFuente.addEventListener('click', function () {
        body.classList.toggle('accesible-fuente-grande');
    });

    // Restablecer estilos
    resetAccesibilidad.addEventListener('click', function () {
        body.classList.remove('accesible-contraste', 'accesible-fuente-grande');
    });
});
