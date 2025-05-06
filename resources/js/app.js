import "bootstrap"; // Importa Bootstrap JS
import "../scss/compile.scss";
import "./focus-style"; /* Import de los estilos de la funcionalidad de recuadro de enfoque */

import { accesibilidad } from "./accesibilidad"; // Componente de accesibilidad
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js
window.Alpine = Alpine;
Alpine.start();

import axios from "axios";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
