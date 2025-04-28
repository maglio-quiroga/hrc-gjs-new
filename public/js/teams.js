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
            loadMoreBtn.classList.add('d-none');
        } else {
            loadMoreBtn.classList.remove('d-none');
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
        var inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
        var inputPosicion = document.getElementById("inputBuscarPosicion").value.toUpperCase();
        var isFiltering = inputNombre.length > 0 || inputPosicion.length > 0;

        rows.forEach((row, index) => {
            var tdNombre = row.getElementsByTagName("td")[1];
            var tdPosicion = row.getElementsByTagName("td")[2];

            if (isFiltering) {
                if (
                    (tdNombre && tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
                    (tdPosicion && tdPosicion.textContent.toUpperCase().indexOf(inputPosicion) > -1)
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
            loadMoreBtn.classList.add('d-none');
        } else {
            if (visibleRows >= rows.length) {
                loadMoreBtn.classList.add('d-none');
            } else {
                loadMoreBtn.classList.remove('d-none');
            }
        }
    };
});
