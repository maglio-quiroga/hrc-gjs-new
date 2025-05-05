document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('table tbody tr');
    const loadMoreBtn = document.getElementById('loadMore');
    const rowsPerPage = 5;
    let visibleRows = rowsPerPage;

    function updateVisibility() {
        let visibles = 0;
        rows.forEach((row) => {
            if (row.style.display !== 'none') {
                if (visibles < visibleRows) {
                    row.classList.remove('d-none');
                    visibles++;
                } else {
                    row.classList.add('d-none');
                }
            } else {
                row.classList.add('d-none');
            }
        });

        const totalVisibles = Array.from(rows).filter(r => r.style.display !== 'none');
        if (visibleRows >= totalVisibles.length) {
            loadMoreBtn.classList.add('d-none');
        } else {
            loadMoreBtn.classList.remove('d-none');
        }
    }

    function buscarTabla() {
        const inputTitulo = document.getElementById("inputBuscarNombre").value.toLowerCase();
        const filtroEstado = document.getElementById("selectEstado").value;
        const filtroCategoria = document.getElementById("selectCategoria").value;

        let hayFiltro =
            inputTitulo.trim() !== '' ||
            filtroEstado !== '' ||
            filtroCategoria !== '';

        rows.forEach(function (row) {
            const titulo = row.children[1].textContent.toLowerCase();
            const estado = row.children[4].textContent.trim();
            const categoria = row.children[5].textContent.trim();

            const coincideTitulo = titulo.includes(inputTitulo);
            const coincideEstado = filtroEstado === '' || estado === filtroEstado;
            const coincideCategoria = filtroCategoria === '' || categoria === filtroCategoria;

            if (coincideTitulo && coincideEstado && coincideCategoria) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });

        if (hayFiltro) {
            loadMoreBtn.classList.add('d-none');
        } else {
            updateVisibility();
        }
    }

    // Eventos
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function () {
            visibleRows += rowsPerPage;
            updateVisibility();
        });
    }

    const inputBuscarNombre = document.getElementById("inputBuscarNombre");
    const selectEstado = document.getElementById("selectEstado");
    const selectCategoria = document.getElementById("selectCategoria");

    if (inputBuscarNombre) inputBuscarNombre.addEventListener('keyup', buscarTabla);
    if (selectEstado) selectEstado.addEventListener('change', buscarTabla);
    if (selectCategoria) selectCategoria.addEventListener('change', buscarTabla);

    updateVisibility();
});
