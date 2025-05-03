import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            // ANTES: input: ["resources/css/app.css", "resources/js/app.js"],
            input: ["resources/scss/app.scss", "resources/js/app.js"], // DESPUÉS:
            refresh: true,
        }),
    ],
});
