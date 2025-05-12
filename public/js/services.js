document.addEventListener("DOMContentLoaded", function () {

    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    const form = document.getElementById("serviceForm");
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector("tbody");

    function showError(input, message) {
        input.classList.add("is-invalid");

        let feedback = input.parentNode.querySelector(".invalid-feedback");
        if (!feedback) {
            feedback = document.createElement("div");
            feedback.className = "invalid-feedback";
            input.parentNode.appendChild(feedback);
        }

        feedback.textContent = message;
    }


    function clearValidation(form) {
        form.querySelectorAll(".is-invalid").forEach(el => el.classList.remove("is-invalid"));
        form.querySelectorAll(".invalid-feedback").forEach(el => el.remove());
    }

    if (form) {
        form.addEventListener("submit", function (e) {
            let isValid = true;
            clearValidation(form);

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
    }

    let currentItems = 5;

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function () {
            const rows = tableBody.querySelectorAll("tr");
            let hiddenRows = Array.from(rows).filter(row => row.style.display === "none");

            let visibleCount = 0;
            for (let i = 0; i < hiddenRows.length && visibleCount < 5; i++) {
                hiddenRows[i].style.display = "";
                visibleCount++;
            }

            if (Array.from(tableBody.querySelectorAll("tr")).filter(r => r.style.display === "none").length === 0) {
                loadMoreBtn.disabled = true;
                loadMoreBtn.textContent = "No hay más servicios";
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.querySelectorAll("tr");

            rows.forEach((row) => {
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
    }

    const initialRows = tableBody.querySelectorAll("tr");
    initialRows.forEach((row, index) => {
        if (index >= currentItems) {
            row.style.display = "none";
        }
    });
});
