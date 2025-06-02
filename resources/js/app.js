import "bootstrap"; // Importa Bootstrap JS
import "../scss/compile.scss";

import {
    accesibilidad,
    highlightElements,
    overlayFilter,
    toggleFocusFeature,
} from "./accesibilidad"; // Componente de accesibilidad
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js
window.Alpine = Alpine;
Alpine.start();

import axios from "axios";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import { getPreferences, updatePreferences } from "./accPrefs";

const prefs = getPreferences();

// Dadas las preferencias, carga el tamaño de texto deseado
document.body.classList.toggle("smaller-text", prefs.textSize === "small");
document.body.classList.toggle("texto-grande", prefs.textSize === "large");
document.body.classList.toggle(
    "texto-muy-pequeño",
    prefs.textSize === "smaller",
);
document.body.classList.toggle("texto-muy-grande", prefs.textSize === "larger");

// Esto para añadir los contrastes pertinentes, although, no es algo que se terminara de cocinar
//document.body.classList.toggle("high-contrast", prefs.highContrast);
//document.body.classList.toggle("modo-alto-contraste", prefs.highContrast);

// Destacar texto
highlightElements(prefs.highlightParagraphsColor);
overlayFilter(prefs.colorFilter);

// Store prefs in window for other scripts if needed
window.__accessibilityPrefs = prefs;

// Listen for preference changes from other components
window.addEventListener("accessibilityPrefsChanged", (e) => {
    const newPrefs = e.detail;
    const updatedPrefs = updatePreferences(newPrefs);

    // Apply changes
    document.body.classList.toggle(
        "smaller-text",
        updatedPrefs.textSize === "small",
    );
    document.body.classList.toggle(
        "texto-grande",
        updatedPrefs.textSize === "large",
    );
    if (updatedPrefs.focusBox !== prefs.focusBox) toggleFocusFeature();

    if (updatedPrefs.colorFilter !== prefs.colorFilter)
        overlayFilter(updatedPrefs.colorFilter);

    window.__accessibilityPrefs = updatedPrefs;
});
