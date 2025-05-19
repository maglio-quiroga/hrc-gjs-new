import { getPreferences, updatePreferences } from "./accPrefs";

let isFocusActive = false;
let overlay = null;
const focusHeight = 75; // Altura del recuadro en píxeles

export function accesibilidad() {
    console.log("Accessibility component initialized");

    document.addEventListener("DOMContentLoaded", function () {
        const toggle = document.getElementById("accessibilityToggle");
        const menu = document.getElementById("accessibilityMenu");
        const accessibilityIcon = document.getElementById("accessibilityIcon");
        const closeIcon = document.getElementById("closeIcon");

        if (toggle && menu && accessibilityIcon && closeIcon) {
            console.log("Found accessibility elements");
            toggle.addEventListener("click", function () {
                console.log("Toggle clicked");
                const isExpanded =
                    toggle.getAttribute("aria-expanded") === "true";

                // Toggle menu visibility
                menu.classList.toggle("d-none");

                // Toggle icons
                accessibilityIcon.classList.toggle("d-none");
                closeIcon.classList.toggle("d-none");

                // Update ARIA attributes
                toggle.setAttribute("aria-expanded", !isExpanded);
            });
        } else {
            console.error("Could not find accessibility elements");
        }

        // Focus Feature
        overlay = document.getElementById("focus-overlay");
        if (!overlay) {
            console.error(
                "Error Crítico: No se encontró el elemento #focus-overlay.",
            );
            return;
        }
        document.addEventListener("mousemove", updateFocus);
        document.addEventListener("mouseleave", hideFocus); // Ocultar cuando el mouse sale
        document.addEventListener("mouseenter", (e) => {
            // Reactivar/actualizar cuando entra
            if (!isFocusActive) return;
            updateFocus(e);
        });

        // Handle accessibility actions
        document.addEventListener("click", function (e) {
            if (!e.target.matches("[data-action]")) return;

            console.log(
                "Accessibility action triggered:",
                e.target.getAttribute("data-action"),
            );

            const action = e.target.getAttribute("data-action");
            const body = document.body;
            const currentPrefs = getPreferences();
            let newPrefs = {};

            switch (action) {
                case "contrast":
                    body.classList.toggle("high-contrast");
                    document.body.classList.toggle("modo-alto-contraste");
                    break;
                case "epilepsy-safe":
                    body.classList.toggle("epilepsy-safe-contrast");
                    break;
                case "increase-font":
                    increaseFont();
                    newPrefs = {
                        ...currentPrefs,
                        textSize: "large",
                    };
                    break;
                case "increase-more-font":
                    increaseMoreFont();
                    newPrefs = {
                        ...currentPrefs,
                        textSize: "larger",
                    };
                    break;
                case "decrease-font":
                    decreaseFont();
                    newPrefs = {
                        ...currentPrefs,
                        textSize: "small",
                    };
                    break;
                case "decrease-any-font":
                    decreaseAnyFont();
                    newPrefs = {
                        ...currentPrefs,
                        textSize: "smaller",
                    };
                    break;
                case "normali-font":
                    normaliFont();
                    newPrefs = {
                        ...currentPrefs,
                        textSize: "normal",
                    };
                    break;
                case "screen-reader":
                    screenReader();
                    break;
                case "highlight-paragraphs":
                    highlightElements(!currentPrefs.highlightElements);
                    newPrefs = {
                        ...currentPrefs,
                        highlightParagraphs: !currentPrefs.highlightParagraphs,
                    };
                    break;
                case "filter-yellow":
                    overlayFilter("yellow");
                    newPrefs = { ...currentPrefs, colorFilter: "yellow" };
                    break;
                case "filter-blue":
                    overlayFilter("blue");
                    newPrefs = { ...currentPrefs, colorFilter: "blue" };
                    break;
                case "filter-white":
                    overlayFilter("white");
                    newPrefs = { ...currentPrefs, colorFilter: "white" };
                    break;
                case "filter-black":
                    overlayFilter("black");
                    newPrefs = { ...currentPrefs, colorFilter: "black" };
                    break;
                case "toggle-focus":
                    toggleFocusFeature();
                    newPrefs = { ...currentPrefs, focusBox: "black" };
                    break;
            }
            if (Object.keys(newPrefs).length > 0) {
                updatePreferences(newPrefs);
                window.dispatchEvent(
                    new CustomEvent("accessibilityPrefsChanged", {
                        detail: newPrefs,
                    }),
                );
            }
        });
    });
}

export function normaliFont() {
    document.body.classList.remove("texto-muy-grande");
    document.body.classList.remove("texto-grande");
    document.body.classList.remove("smaller-text");
    document.body.classList.remove("texto-muy-pequeño");
}
export function increaseFont() {
    document.body.classList.remove("texto-muy-pequeño");
    document.body.classList.remove("smaller-text");
    document.body.classList.remove("texto-muy-grande");
    document.body.classList.add("texto-grande");
}
export function increaseMoreFont() {
    document.body.classList.remove("texto-muy-pequeño");
    document.body.classList.remove("smaller-text");
    document.body.classList.remove("texto-grande");
    document.body.classList.add("texto-muy-grande");
}
export function decreaseFont() {
    document.body.classList.remove("texto-muy-grande");
    document.body.classList.remove("texto-grande");
    document.body.classList.remove("texto-muy-pequeño");
    document.body.classList.add("smaller-text");
}
export function decreaseAnyFont() {
    document.body.classList.remove("texto-muy-grande");
    document.body.classList.remove("texto-grande");
    document.body.classList.remove("smaller-text");
    document.body.classList.add("texto-muy-pequeño");
}
export function screenReader() {
    // Cancelar la lectura anterior que este en ejecucion
    window.speechSynthesis.cancel();
    const selection = window.getSelection().toString().trim();
    const texto =
        selection !== ""
            ? selection
            : "Por favor seleccione un texto para leer.";
    // Dividir texto si es nuy largo para evitar bloqueos
    const MAX_LENGTH = 100000; // ajustar este valor mara el maximo a leer
    const partes = texto.match(new RegExp(`.{1,${MAX_LENGTH}}`, "g"));
    partes.forEach((parte) => {
        const speech = new SpeechSynthesisUtterance(parte);
        speech.lang = "es-ES";
        speech.rate = 1.2;
        window.speechSynthesis.speak(speech);
    });
}
export function highlightElements(highlight) {
    // Select all elements we want to highlight
    const elementsToHighlight = document.querySelectorAll(
        "p, li, aside, section",
    );
    elementsToHighlight.forEach((element) => {
        if (element.offsetParent !== null) {
            element.classList.toggle("highlighted-element");
        }
    });
}
export function overlayFilter(color) {
    const overlayColor = document.getElementById("colorFilterOverlay");
    if (!overlayColor) return;

    // Quitar clases anteriores
    overlayColor.classList.remove(
        "color-filter-yellow",
        "color-filter-blue",
        "color-filter-white",
        "color-filter-black",
    );

    // Agregar clase correspondiente
    const colorClass = `color-filter-${color}`;
    overlayColor.classList.add(colorClass);
}

export function toggleFocusFeature() {
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

export function updateFocus(event) {
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

export function hideFocus() {
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
