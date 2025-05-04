import "bootstrap"; // Importa Bootstrap JS
import "../scss/accesibilidad.scss";
import "../scss/compile.scss";

import { accesibilidad } from "./accesibilidad"; // Componente de accesibilidad
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js
window.Alpine = Alpine;
Alpine.start();

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
