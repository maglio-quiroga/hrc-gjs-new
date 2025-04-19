document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("serviceForm");

    if (!form) return;

    form.addEventListener("submit", function (e) {
        let isValid = true;

        document.querySelectorAll(".error-msg").forEach(el => el.remove());

        const nameInput = document.getElementById("name");
        if (!nameInput.value.trim()) {
            isValid = false;
            showError(nameInput, "El nombre es obligatorio.");
        }

        const descriptionInput = document.getElementById("description");
        if (descriptionInput.value.trim().length < 10) {
            isValid = false;
            showError(descriptionInput, "La descripción debe tener al menos 10 caracteres.");
        }

        const imageInput = document.getElementById("image");
        if (imageInput && imageInput.files.length > 0) {
            const file = imageInput.files[0];
            const allowedTypes = ["image/jpeg", "image/png", "image/webp"];
            if (!allowedTypes.includes(file.type)) {
                isValid = false;
                showError(imageInput, "Formato de imagen no válido. Usa JPG, PNG o WebP.");
            }
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    function showError(input, message) {
        const error = document.createElement("div");
        error.className = "error-msg";
        error.style.color = "red";
        error.style.fontSize = "0.9em";
        error.textContent = message;
        input.parentNode.insertBefore(error, input.nextSibling);
    }
});