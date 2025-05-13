document.addEventListener('DOMContentLoaded', function () {
    
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


    const rows = document.querySelectorAll('table tbody tr');
    const loadMoreBtn = document.getElementById('loadMore');
    const rowsPerPage = 5;

    function ocultarFilasIniciales() {
        let visibles = 0;
        rows.forEach((row) => {
            if (visibles < rowsPerPage) {
                row.style.display = "";
                visibles++;
            } else {
                row.style.display = "none";
            }
        });
    }

    function buscarTabla() {
        const inputTitulo = document.getElementById("inputBuscarNombre").value.toLowerCase();
        const filtroEstado = document.getElementById("selectEstado").value;
        const filtroCategoria = document.getElementById("selectCategoria").value;

        let hayFiltro =
            inputTitulo.trim() !== '' ||
            filtroEstado !== '' ||
            filtroCategoria !== '';

        let visibles = 0;
        rows.forEach(function (row) {
            const titulo = row.children[1].textContent.toLowerCase();
            const estado = row.children[4].textContent.trim();
            const categoria = row.children[5].textContent.trim();

            const coincideTitulo = titulo.includes(inputTitulo);
            const coincideEstado = filtroEstado === '' || estado === filtroEstado;
            const coincideCategoria = filtroCategoria === '' || categoria === filtroCategoria;

            if (coincideTitulo && coincideEstado && coincideCategoria) {
                row.style.display = "";
                visibles++;
            } else {
                row.style.display = "none";
            }
        });

        if (hayFiltro) {
            loadMoreBtn.classList.add('d-none');
        } else {
            loadMoreBtn.classList.remove('d-none');
            verificarFinFilas();
        }
    }

    function verificarFinFilas() {
        const hiddenRows = Array.from(rows).filter(row => row.style.display === "none");
        if (hiddenRows.length === 0) {
            loadMoreBtn.disabled = true;
            loadMoreBtn.textContent = "No hay más noticias";
        } else {
            loadMoreBtn.disabled = false;
            loadMoreBtn.textContent = "Cargar más";
        }
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function () {
            const hiddenRows = Array.from(rows).filter(row => row.style.display === "none");
            let count = 0;
            for (let i = 0; i < hiddenRows.length && count < rowsPerPage; i++) {
                hiddenRows[i].style.display = "";
                count++;
            }

            verificarFinFilas();
        });
    }

    const inputBuscarNombre = document.getElementById("inputBuscarNombre");
    const selectEstado = document.getElementById("selectEstado");
    const selectCategoria = document.getElementById("selectCategoria");

    if (inputBuscarNombre) inputBuscarNombre.addEventListener('keyup', buscarTabla);
    if (selectEstado) selectEstado.addEventListener('change', buscarTabla);
    if (selectCategoria) selectCategoria.addEventListener('change', buscarTabla);

    ocultarFilasIniciales();
    verificarFinFilas();
});
