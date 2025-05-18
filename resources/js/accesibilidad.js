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
                //texto muy grande
                case "increase-more-font":
                    if (document.body.classList.contains("texto-muy-pequeño")) {
                        document.body.classList.remove(".texto-muy-pequeño");
                        break;
                    } 
                    else if(document.body.classList.contains("smaller-text")){
                        document.body.classList.remove("smaller-text");
                        break;
                    }
                    else if(document.body.classList.contains("texto-grande")) {
                        document.body.classList.remove("texto-grande");
                        break;
                    }
                    document.body.classList.add("texto-muy-grande");
                //texto grande
                case "increase-font":
                    if (document.body.classList.contains("texto-muy-pequeño")) {
                        document.body.classList.remove(".texto-muy-pequeño");
                        break;
                    } 
                    else if(document.body.classList.contains("smaller-text")){
                        document.body.classList.remove("smaller-text");
                        break;
                    }
                    else if(document.body.classList.contains("texto-muy-grande")) {
                        document.body.classList.remove("texto-muy-grande");
                        break;
                    }
                    document.body.classList.add("texto-grande");
                //texto pequeño
                case "decrease-font":
                    if(document.body.classList.contains("texto-muy-grande")) {
                        document.body.classList.remove("texto-muy-grande");
                        break;
                    }
                    else if (document.body.classList.contains("texto-grande")) {
                        document.body.classList.remove("texto-grande");
                        break;
                    }
                    else if(document.body.classList.contains("texto-muy-pequeño")){
                        document.body.classList.remove("texto-muy-pequeño");
                        break;
                    }
                    document.body.classList.add("smaller-text");
                //texto muy pequeño
                case "decrease-any-font":
                    if(document.body.classList.contains("texto-muy-grande")) {
                        document.body.classList.remove("texto-muy-grande");
                        break;
                    }
                    else if (document.body.classList.contains("texto-grande")) {
                        document.body.classList.remove("texto-grande");
                        break;
                    }
                    else if(document.body.classList.contains("smaller-text")){
                        document.body.classList.remove("smaller-text");
                        break;
                    }
                    document.body.classList.add("texto-muy-pequeño");
                //teto normal
                case "normali-font":
                    if(document.body.classList.contains("texto-muy-grande")) {
                        document.body.classList.remove("texto-muy-grande");
                        break;
                    }
                    else if (document.body.classList.contains("texto-grande")) {
                        document.body.classList.remove("texto-grande");
                        break;
                    }
                    else if(document.body.classList.contains("smaller-text")){
                        document.body.classList.remove("smaller-text");
                        break;
                    }
                    else if(document.body.classList.contains("smaller-text")){
                        document.body.classList.remove("smaller-text");
                        break;
                    }
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
