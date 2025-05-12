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
                    if (document.body.classList.contains("smaller-text"))
                        document.body.classList.remove("smaller-text");
                    else document.body.classList.add("texto-grande");
                    break;
                case "decrease-font":
                    if (document.body.classList.contains("texto-grande"))
                        document.body.classList.remove("texto-grande");
                    else document.body.classList.add("smaller-text");
                    break;
                case "screen-reader":
                    // Cancelar la lectura anterior que este en ejecucion
                    window.speechSynthesis.cancel();
                    const selection = window.getSelection().toString().trim();
                    const texto =
                        selection !== ""
                            ? selection
                            : "Por favor seleccione un texto para leer.";
                    // Dividir texto si es nuy largo para evitar bloqueos
                    const MAX_LENGTH = 100000; // ajustar este valor mara el maximo a leer
                    const partes = texto.match(
                        new RegExp(`.{1,${MAX_LENGTH}}`, "g"),
                    );
                    partes.forEach((parte) => {
                        const speech = new SpeechSynthesisUtterance(parte);
                        speech.lang = "es-ES";
                        speech.rate = 1.2;
                        window.speechSynthesis.speak(speech);
                    });
                    break;
                case "highlight-paragraphs":
                    // Select all elements we want to highlight
                    const elementsToHighlight = document.querySelectorAll(
                        "p, li, aside, section",
                    );

                    elementsToHighlight.forEach((element) => {
                        if (element.offsetParent !== null) {
                            element.classList.toggle("highlighted-element");
                        }
                    });
                    break;
                case "epilepsy-safe":
                    body.classList.toggle("epilepsy-safe-contrast");
                    break;
                case "toggle-filter":
                    const overlay =
                        document.getElementById("colorFilterOverlay");
                    if (!overlay) return;
                    // Mostrar/ocultar
                    overlay.classList.toggle("d-none");
                    break;
                case "filter-yellow":
                case "filter-blue":
                case "filter-white":
                case "filter-black":
                    const overlayColor =
                        document.getElementById("colorFilterOverlay");
                    if (!overlayColor) return;

                    // Mostrar overlay si estaba oculto
                    overlayColor.classList.remove("d-none");

                    // Quitar clases anteriores
                    overlayColor.classList.remove(
                        "color-filter-yellow",
                        "color-filter-blue",
                        "color-filter-white",
                        "color-filter-black",
                    );

                    // Agregar clase correspondiente
                    const colorClass = action.replace(
                        "filter-",
                        "color-filter-",
                    );
                    overlayColor.classList.add(colorClass);
                    break;
            }
        });
    });
}
