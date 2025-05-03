import "./bootstrap"; // Importa Axios
import "../scss/accesibilidad.scss";
//import "../scss/compile.scss";
import "bootstrap"; // Importa Bootstrap JS

import { accesibilidad } from "./accesibilidad"; // Componente de accesibilidad
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js

window.Alpine = Alpine;

Alpine.start();
