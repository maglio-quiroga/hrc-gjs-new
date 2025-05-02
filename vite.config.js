// vite.config.js

import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            // ANTES: input: ["resources/css/app.css", "resources/js/app.js"],
            // DESPUÉS:
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});