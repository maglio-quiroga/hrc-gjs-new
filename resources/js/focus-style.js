// resources/js/focus-script.js
let isFocusActive = false;
let overlay = null;
const focusHeight = 75; // Altura del recuadro en píxeles

function toggleFocusFeature() {
    if (!overlay) {
        console.warn("Overlay no listo aún.");
        return;
    }
    isFocusActive = !isFocusActive;
    overlay.classList.toggle("focus-active", isFocusActive);
    // Si está activo, actualiza la posición inicial por si el mouse no se ha movido
    //if (isFocusActive) {
    // Podrías simular un evento o poner una posición inicial si es necesario
    // updateFocus({ clientY: window.innerHeight / 2 }); // Ejemplo: centrar inicialmente
    //}
}

function updateFocus(event) {
    if (!isFocusActive || !overlay) {
        return;
    }

    const mouseY = event.clientY;
    const rectY = mouseY - focusHeight / 2;
    const y1 = Math.max(0, rectY); // Evita valores negativos
    const y2 = y1 + focusHeight;
    const x1 = 0;
    const x2 = window.innerWidth;

    const clipPathValue = `polygon(
        evenodd,
        0% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 0%,
        ${x1}px ${y1}px, ${x2}px ${y1}px, ${x2}px ${y2}px, ${x1}px ${y2}px, ${x1}px ${y1}px
    )`;

    requestAnimationFrame(() => {
        if (isFocusActive && overlay) {
            overlay.style.clipPath = clipPathValue;
        }
    });
}

function hideFocus() {
    if (!isFocusActive || !overlay) return;
    requestAnimationFrame(() => {
        if (!overlay) return;
        const y1_off = -focusHeight - 10; // Posiciona el recorte fuera de la vista
        const y2_off = -10;
        const x1 = 0;
        const x2 = window.innerWidth;
        overlay.style.clipPath = `polygon(
            evenodd, 0% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 0%,
            ${x1}px ${y1_off}px, ${x2}px ${y1_off}px, ${x2}px ${y2_off}px, ${x1}px ${y2_off}px, ${x1}px ${y1_off}px
        )`;
    });
}

document.addEventListener("DOMContentLoaded", () => {
    overlay = document.getElementById("focus-overlay");
    const focusToggleButton = document.getElementById("focus-toggle-button"); // ID del nuevo botón

    if (!overlay) {
        console.error(
            "Error Crítico: No se encontró el elemento #focus-overlay.",
        );
        return;
    }
    if (!focusToggleButton) {
        console.error(
            "Error Crítico: No se encontró el botón #focus-toggle-button.",
        );
        return;
    }

    // *** Añadir Event Listener al botón ***
    focusToggleButton.addEventListener("click", toggleFocusFeature);

    document.addEventListener("mousemove", updateFocus);
    document.addEventListener("mouseleave", hideFocus); // Ocultar cuando el mouse sale
    document.addEventListener("mouseenter", (e) => {
        // Reactivar/actualizar cuando entra
        if (!isFocusActive) return;
        updateFocus(e);
    });
});
