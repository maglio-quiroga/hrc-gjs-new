document.addEventListener("DOMContentLoaded", function() {
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

    // Código para mostrar filas con botón "Cargar más"
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
            if (loadMoreBtn) {
                loadMoreBtn.textContent = "No hay más miembros del equipo";
                loadMoreBtn.disabled = true; // se mantiene el color original
            }
        } else {
            if (loadMoreBtn) {
                loadMoreBtn.textContent = "Cargar más";
                loadMoreBtn.disabled = false;
            }
        }
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function() {
            visibleRows += rowsPerPage;
            updateVisibility();
        });
    }

    updateVisibility(); // inicializa visibilidad

    // ------------------- Búsqueda dinámica con AJAX ---------------------
    const inputBuscar = document.getElementById('inputBuscarNombre');
    const tableBody = document.getElementById('team-tbody');
    const paginationContainer = document.getElementById('teams-pagination');
    let typingTimer;
    const typingDelay = 500;

    function fetchTeams(query = '') {
        const url = new URL(window.location.href);
        if (query) {
            url.searchParams.set('name', query);
        } else {
            url.searchParams.delete('name');
        }
        url.searchParams.delete('page'); // reset página al buscar

        fetch(url.toString(), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Error en la petición');
            return response.text();
        })
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newTbody = doc.getElementById('team-tbody');
            const newPagination = doc.getElementById('teams-pagination');

            if (newTbody) {
                tableBody.innerHTML = newTbody.innerHTML;
            }
            if (newPagination) {
                paginationContainer.innerHTML = newPagination.innerHTML;
            }

            // Actualizamos las filas y visibilidad para "Cargar más" después del filtro
            updateRowsAfterFetch();
        })
        .catch(err => {
            console.error('Error al cargar equipos:', err);
        });
    }

    function updateRowsAfterFetch() {
        // Actualizar variables con las nuevas filas cargadas
        const newRows = document.querySelectorAll("#team-tbody .team-row");
        visibleRows = 5;
        // Quitar clase d-none a todas
        newRows.forEach(row => row.classList.remove('d-none'));

        // Si hay botón cargar más, reiniciar visibilidad y comportamiento
        if (loadMoreBtn) {
            visibleRows = 5;
            rows.forEach(row => row.classList.remove('d-none'));
            updateVisibility();
        }
    }

    if (inputBuscar) {
        inputBuscar.addEventListener('input', () => {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(() => {
                fetchTeams(inputBuscar.value.trim());
            }, typingDelay);
        });
    }

    // Paginación AJAX
    document.addEventListener('click', function(e) {
        if (e.target.closest('#teams-pagination a')) {
            e.preventDefault();
            const url = e.target.closest('a').href;

            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Error en la petición de paginación');
                return response.text();
            })
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newTbody = doc.getElementById('team-tbody');
                const newPagination = doc.getElementById('teams-pagination');

                if (newTbody) {
                    tableBody.innerHTML = newTbody.innerHTML;
                }
                if (newPagination) {
                    paginationContainer.innerHTML = newPagination.innerHTML;
                }
                updateRowsAfterFetch();
            })
            .catch(err => {
                console.error('Error al cargar paginación:', err);
            });
        }
    });
});
