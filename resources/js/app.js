import "bootstrap"; // Importa Bootstrap JS
import "../scss/compile.scss";
import "../scss/compileTemp.scss";

import {
    accesibilidad,
    increaseFont,
    decreaseFont,
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

document.body.classList.toggle("smaller-text", prefs.textSize === "small");
document.body.classList.toggle("texto-grande", prefs.textSize === "large");
//document.body.classList.toggle("high-contrast", prefs.highContrast);
//document.body.classList.toggle("modo-alto-contraste", prefs.highContrast);
if (prefs.focusBox) toggleFocusFeature();
if (prefs.highlightParagraphs) highlightElements();
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

    if (updatedPrefs.colorFilter !== prefs.colorFilter)
        overlayFilter(updatedPrefs.colorFilter);

    window.__accessibilityPrefs = updatedPrefs;
});
