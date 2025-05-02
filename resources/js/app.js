// resources/js/app.js

import './bootstrap'; // Importa Axios
import 'bootstrap';   // Importa Bootstrap JS

import { accesibilidad } from "./accesibilidad"; // Tu script personalizado
accesibilidad();

import Alpine from "alpinejs"; // Alpine.js

window.Alpine = Alpine;

Alpine.start();