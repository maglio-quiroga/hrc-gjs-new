document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("serviceForm");
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector("tbody");

    if (form) {
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
    }

    let currentItems = 10;

    loadMoreBtn.addEventListener("click", function () {
        const rows = tableBody.querySelectorAll("tr");
        let hiddenRows = Array.from(rows).filter(row => row.style.display === "none");

        let visibleCount = 0;
        for (let i = 0; i < hiddenRows.length && visibleCount < 10; i++) {
            hiddenRows[i].style.display = "";
            visibleCount++;
        }

        if (Array.from(tableBody.querySelectorAll("tr")).filter(r => r.style.display === "none").length === 0) {
            loadMoreBtn.disabled = true;
            loadMoreBtn.textContent = "No hay más servicios";
        }
    });

    searchInput.addEventListener("input", function () {
        const filter = searchInput.value.toLowerCase();
        const rows = tableBody.querySelectorAll("tr");

        rows.forEach((row, index) => {
            const name = row.children[1]?.textContent.toLowerCase() || "";
            const description = row.children[2]?.textContent.toLowerCase() || "";

            if (name.includes(filter) || description.includes(filter)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        loadMoreBtn.disabled = true;
    });

    const initialRows = tableBody.querySelectorAll("tr");
    initialRows.forEach((row, index) => {
        if (index >= currentItems) {
            row.style.display = "none";
        }
    });
});
