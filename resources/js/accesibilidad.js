export function accesibilidad() {
    console.log("Accessibility component initialized");

    document.addEventListener("DOMContentLoaded", function () {
        console.log("DOM fully loaded");

        // Toggle menu visibility
        const toggle = document.getElementById("accessibilityToggle");
        const menu = document.getElementById("accessibilityMenu");

        if (toggle && menu) {
            console.log("Found accessibility elements");
            toggle.addEventListener("click", function () {
                console.log("Toggle clicked");
                menu.classList.toggle("d-none");
            });
        } else {
            console.error("Could not find accessibility elements");
        }

        // Handle accessibility actions
        document.addEventListener("click", function (e) {
            if (!e.target.matches("[data-action]")) return;

            console.log(
                "Accessibility action triggered:",
                e.target.getAttribute("data-action"),
            );

            const action = e.target.getAttribute("data-action");
            const body = document.body;

            switch (action) {
                case "contrast":
                    body.classList.toggle("high-contrast");
                    document.body.classList.toggle("modo-alto-contraste");
                    break;
                case "increase-font":
                    //CREANDO la lista para agregar la etiqueta "creo"
                    document.body.classList.add("texto-grande");
                    //AGREGAR etieueta fontSize a body
                    document.body.style.fontSize = fontSize + "em";
                    break;
                case "decrease-font":
                    body.classList.toggle("smaller-text");
                    break;
                case "screen-reader":
                    const texto = document.body.innerText;
                    const speech = new SpeechSynthesisUtterance(texto);
                    speech.lang = "es-ES";
                    window.speechSynthesis.speak(speech);
                    break;
            }
        });
    });
}
