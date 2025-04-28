function buscarTabla() {
    var inputTitulo = document.getElementById("inputBuscarNombre").value.toLowerCase();
    var table = document.querySelector(".table");
    var filas = table.querySelectorAll("tbody tr");

    filas.forEach(function (fila) {
        var titulo = fila.children[1].textContent.toLowerCase(); // La segunda columna es Título

        var coincideTitulo = titulo.includes(inputTitulo);

        if (coincideTitulo) {
            fila.style.display = "";
        } else {
            fila.style.display = "none";
        }
    });
}
