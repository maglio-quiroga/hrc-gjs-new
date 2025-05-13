import "bootstrap"; // Importa Bootstrap JS
import "../scss/compile.scss";
import "../scss/compileTemp.scss";
import "./focus-style"; /* Import de los estilos de la funcionalidad de recuadro de enfoque */

import {
    accesibilidad,
    increaseFont,
    decreaseFont,
    highlightElements,
    overlayFilter,
} from "./accesibilidad"; // Componente de accesibilidad
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js
window.Alpine = Alpine;
Alpine.start();

import axios from "axios";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import { getPreferences } from "./accPrefs";

const prefs = getPreferences();

switch (prefs.textSize) {
    case "small":
        decreaseFont();
        break;
    case "large":
        increaseFont();
        break;
    default:
        break;
}
if (prefs.focusBox) focusBox();
if (prefs.highlightElements) highlightElements();
overlayFilter(prefs.colorFilter);
