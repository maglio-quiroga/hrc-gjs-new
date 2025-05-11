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
                //cambiar constraste
                case "contrast":
                    body.classList.toggle("high-contrast");
                    document.body.classList.toggle("modo-alto-contraste");
                    break;
                //AUMENTA EL TAÑO DEL TEXTO
                case "increase-font":
                    //si "smaller-text" SI existe
                    if (document.body.classList.contains("smaller-text")) {
                        //remueve la clase "smaller-text"
                        document.body.classList.remove("smaller-text");
                        break;
                    }
                    //si "smaller-text" NO existe
                    else {
                        //CREANDO la lista para agregar la etiqueta
                        document.body.classList.add("texto-grande");
                        //AGREGAR etieueta fontSize a body
                        document.body.style.fontSize = fontSize + "em";
                        break;
                    }
                //REDUCIR TAMAÑO DEL TEXTO
                case "decrease-font":
                    //si "texto-grande" SI existe
                    if (document.body.classList.contains("texto-grande")) {
                        //remueve la clase "texto-grande" mostrando el tamaño originañ
                        document.body.classList.remove("texto-grande");
                        break;
                    }
                    //si "texto-grande" NO existe
                    else {
                        //AGrege la clase para reducir texto
                        document.body.classList.add("smaller-text");
                        break;
                    }
                case "screen-reader":
                        // Cancelar la lectura anterior que este en ejecucion
                        window.speechSynthesis.cancel();

                        const selection = window.getSelection().toString().trim();
                        const texto = selection !== "" ? selection : "Por favor seleccione un texto para leer.";

                        // Dividir texto si es nuy largo para evitar bloqueos
                        const MAX_LENGTH = 100000; // ajustar este valor mara el maximo a leer
                        const partes = texto.match(new RegExp(`.{1,${MAX_LENGTH}}`, "g"));

                        partes.forEach(parte => {
                            const speech = new SpeechSynthesisUtterance(parte);
                            speech.lang = "es-ES";
                            speech.rate = 1.2;
                            window.speechSynthesis.speak(speech);
                        });
                        break;

                case "highlight-paragraphs":
                    const paragraphs = document.querySelectorAll("p");
                    paragraphs.forEach(p => {
                        p.classList.toggle("highlighted-paragraph");
                    });
                    break;
                
                case "epilepsy-safe":
                    body.classList.toggle("epilepsy-safe-contrast");
                    break;
            }
        });
    });
}
