<div class="position-fixed bottom-0 end-0 m-3" style="z-index: 10000;">
    <button id="accessibilityToggle" class="btn btn-primary rounded-circle p-3">♿</button>
    <div id="accessibilityMenu" class="bg-white border rounded shadow-sm p-3 mt-2 d-none" style="width: 200px;">
        <div class="d-grid gap-2">
            <!--button data-action="contrast" class="btn btn-outline-secondary text-start">Cambiar Contraste</button-->
            <button data-action="increase-font" class="btn btn-outline-secondary text-start">Aumentar Texto</button>
            <button data-action="decrease-font" class="btn btn-outline-secondary text-start">Reducir Texto</button>
            <button data-action="screen-reader" class="btn btn-outline-secondary text-start">Lectura de Pantalla</button>
            <button data-action="toggle-focus" id="focus-toggle-button" class="btn btn-outline-secondary text-start">Recuadro de Enfoque</button>
            <button data-action="highlight-paragraphs">Resaltar párrafos</button>
            <button data-action="epilepsy-safe">Contraste para epilepsia</button>
            <button data-action="toggle-filter">Activar/Desactivar filtro</button>
                    <div>
                        <label>Colores del filtro:</label><br>
                        <button data-action="filter-yellow">Amarillo</button>
                        <button data-action="filter-blue">Azul</button>
                        <button data-action="filter-white">Blanco</button>
                        <button data-action="filter-black">Negro</button>
                    </div>
            
        </div>
    </div>
</div>
