document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll("#team-tbody .team-row");
    const loadMoreBtn = document.getElementById("loadMore");
    let visibleRows = 5; // filas visibles por defecto
    const rowsPerPage = 5;

    function updateVisibility() {
        rows.forEach((row, index) => {
            if (index < visibleRows) {
                row.classList.remove('d-none');
            } else {
                row.classList.add('d-none');
            }
        });

        if (visibleRows >= rows.length) {
            loadMoreBtn.textContent = "No hay más miembros del equipo";
            loadMoreBtn.disabled = true; // se mantiene el color original
        } else {
            loadMoreBtn.textContent = "Cargar más";
            loadMoreBtn.disabled = false;
        }
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function() {
            visibleRows += rowsPerPage;
            updateVisibility();
        });
    }

    updateVisibility();

    window.buscarTabla = function() {
        const inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
        const inputPosicion = document.getElementById("inputBuscarPosicion").value.toUpperCase();
        const isFiltering = inputNombre.length > 0 || inputPosicion.length > 0;

        rows.forEach((row, index) => {
            const tdNombre = row.getElementsByTagName("td")[1];
            const tdPosicion = row.getElementsByTagName("td")[2];

            if (isFiltering) {
                if (
                    (tdNombre && tdNombre.textContent.toUpperCase().includes(inputNombre)) &&
                    (tdPosicion && tdPosicion.textContent.toUpperCase().includes(inputPosicion))
                ) {
                    row.classList.remove('d-none');
                } else {
                    row.classList.add('d-none');
                }
            } else {
                if (index < visibleRows) {
                    row.classList.remove('d-none');
                } else {
                    row.classList.add('d-none');
                }
            }
        });

        if (isFiltering) {
            loadMoreBtn.textContent = "Cargar más";
            loadMoreBtn.disabled = true;
        } else {
            if (visibleRows >= rows.length) {
                loadMoreBtn.textContent = "No hay más miembros del equipo";
                loadMoreBtn.disabled = true;
            } else {
                loadMoreBtn.textContent = "Cargar más";
                loadMoreBtn.disabled = false;
            }
        }
    };
});
