document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("serviceForm"); // puedes renombrarlo si prefieres
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

            const emailInput = document.getElementById("email");
            if (!emailInput.value.trim() || !validateEmail(emailInput.value.trim())) {
                isValid = false;
                showError(emailInput, "Debes ingresar un correo electrónico válido.");
            }

            const passwordInput = document.getElementById("password");
            if (passwordInput && passwordInput.value.length < 6) {
                isValid = false;
                showError(passwordInput, "La contraseña debe tener al menos 6 caracteres.");
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

        function validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    }

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
