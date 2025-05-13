export function accesibilidad() {
    console.log("Accessibility component initialized");

    document.addEventListener("DOMContentLoaded", function () {
        console.log("DOM fully loaded");

        // Toggle menu visibility
        const toggle = document.getElementById("accessibilityToggle");
        const menu = document.getElementById("accessibilityMenu");
        const accessibilityIcon = document.getElementById("accessibilityIcon");
        const closeIcon = document.getElementById("closeIcon");

        if (toggle && menu && accessibilityIcon && closeIcon) {
            console.log("Found accessibility elements");
            toggle.addEventListener("click", function () {
                console.log("Toggle clicked");
                const isExpanded =
                    toggle.getAttribute("aria-expanded") === "true";

                // Toggle menu visibility
                menu.classList.toggle("d-none");

                // Toggle icons
                accessibilityIcon.classList.toggle("d-none");
                closeIcon.classList.toggle("d-none");

                // Update ARIA attributes
                toggle.setAttribute("aria-expanded", !isExpanded);
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
                    increaseFont();
                    break;
                case "decrease-font":
                    decreaseFont();
                    break;
                case "screen-reader":
                    screenReader();
                    break;
                case "highlight-paragraphs":
                    highlightElements();
                    break;
                case "epilepsy-safe":
                    body.classList.toggle("epilepsy-safe-contrast");
                    break;
                case "filter-yellow":
                    overlayFilter("yellow");
                    break;
                case "filter-blue":
                    overlayFilter("blue");
                    break;
                case "filter-white":
                    overlayFilter("white");
                    break;
                case "filter-black":
                    overlayFilter("black");
                    break;
            }
        });
    });
}

export function increaseFont() {
    if (document.body.classList.contains("smaller-text"))
        document.body.classList.remove("smaller-text");
    else document.body.classList.add("texto-grande");
}
export function decreaseFont() {
    if (document.body.classList.contains("texto-grande"))
        document.body.classList.remove("texto-grande");
    else document.body.classList.add("smaller-text");
}
export function screenReader() {
    // Cancelar la lectura anterior que este en ejecucion
    window.speechSynthesis.cancel();
    const selection = window.getSelection().toString().trim();
    const texto =
        selection !== ""
            ? selection
            : "Por favor seleccione un texto para leer.";
    // Dividir texto si es nuy largo para evitar bloqueos
    const MAX_LENGTH = 100000; // ajustar este valor mara el maximo a leer
    const partes = texto.match(new RegExp(`.{1,${MAX_LENGTH}}`, "g"));
    partes.forEach((parte) => {
        const speech = new SpeechSynthesisUtterance(parte);
        speech.lang = "es-ES";
        speech.rate = 1.2;
        window.speechSynthesis.speak(speech);
    });
}
export function highlightElements() {
    // Select all elements we want to highlight
    const elementsToHighlight = document.querySelectorAll(
        "p, li, aside, section",
    );
    elementsToHighlight.forEach((element) => {
        if (element.offsetParent !== null) {
            element.classList.toggle("highlighted-element");
        }
    });
}
export function overlayFilter(color) {
    const overlayColor = document.getElementById("colorFilterOverlay");
    if (!overlayColor) return;

    // Quitar clases anteriores
    overlayColor.classList.remove(
        "color-filter-yellow",
        "color-filter-blue",
        "color-filter-white",
        "color-filter-black",
    );

    // Agregar clase correspondiente
    const colorClass = `color-filter-${color}`;
    overlayColor.classList.add(colorClass);
}
