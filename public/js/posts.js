document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('table tbody tr'); 
    const loadMoreBtn = document.getElementById('loadMore');
    const rowsPerPage = 5; 
    let visibleRows = rowsPerPage;

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

    function buscarTabla() {
        const inputTitulo = document.getElementById("inputBuscarNombre").value.toLowerCase();
        let hayFiltro = inputTitulo.trim() !== '';

        rows.forEach(function(row) {
            const titulo = row.children[1].textContent.toLowerCase(); 
            const coincideTitulo = titulo.includes(inputTitulo);

            if (coincideTitulo) {
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

    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            visibleRows += rowsPerPage;
            updateVisibility();
        });
    }

    const inputBuscarNombre = document.getElementById("inputBuscarNombre");
    if (inputBuscarNombre) {
        inputBuscarNombre.addEventListener('keyup', buscarTabla);
    }

    updateVisibility();
});
