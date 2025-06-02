document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("userForm");
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.querySelector("tbody");

    // Función para mostrar errores con Bootstrap
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

    // Limpia validaciones previas
    function clearValidation(form) {
        form.querySelectorAll(".is-invalid").forEach(el => el.classList.remove("is-invalid"));
        form.querySelectorAll(".invalid-feedback").forEach(el => el.remove());
    }

    // Validación del email
    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    if (form) {
        form.addEventListener("submit", function (e) {
            let isValid = true;
            clearValidation(form);

            const nameInput = form.querySelector("input[name='name']");
            if (!nameInput.value.trim()) {
                isValid = false;
                showError(nameInput, "El nombre es obligatorio.");
            }

            const emailInput = form.querySelector("input[name='email']");
            if (!emailInput.value.trim() || !validateEmail(emailInput.value.trim())) {
                isValid = false;
                showError(emailInput, "Debes ingresar un correo electrónico válido.");
            }

            const passwordInput = form.querySelector("input[name='password']");
            if (!passwordInput.value.trim() || passwordInput.value.length < 6) {
                isValid = false;
                showError(passwordInput, "La contraseña debe tener al menos 6 caracteres.");
            }

            if (!isValid) {
                e.preventDefault(); // Detiene envío
                form.classList.add('was-validated');
            }
        });
    }

    // ---------------- TABLA ----------------

    let currentItems = 5;

    if (loadMoreBtn && tableBody) {
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
                loadMoreBtn.textContent = "No hay más usuarios";
            }
        });
    }

    if (searchInput && tableBody) {
        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.querySelectorAll("tr");

            rows.forEach((row) => {
                const name = row.children[1]?.textContent.toLowerCase() || "";
                const email = row.children[2]?.textContent.toLowerCase() || "";

                if (name.includes(filter) || email.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });

            loadMoreBtn.disabled = true;
        });
    }

    const initialRows = tableBody?.querySelectorAll("tr") || [];
    initialRows.forEach((row, index) => {
        if (index >= currentItems) {
            row.style.display = "none";
        }
    });
});
