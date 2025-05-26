<div class="position-fixed bottom-0 end-0 m-3 accesibleBoton">
    <button id="accessibilityToggle"
            class="btn btn-dark rounded-circle p-3 d-flex align-items-center justify-content-center position-relative accessibility-icon"
            aria-label="Accessibility options"
            aria-expanded="false"
            aria-controls="accessibilityMenu">
        <!-- Default icon (accessibility) -->
        <svg id="accessibilityIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512" fill="currentColor">
            <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm161.5-86.1c-12.2-5.2-26.3 .4-31.5 12.6s.4 26.3 12.6 31.5l11.9 5.1c17.3 7.4 35.2 12.9 53.6 16.3v50.1c0 4.3-.7 8.6-2.1 12.6l-28.7 86.1c-4.2 12.6 2.6 26.2 15.2 30.4s26.2-2.6 30.4-15.2l24.4-73.2c1.3-3.8 4.8-6.4 8.8-6.4s7.6 2.6 8.8 6.4l24.4 73.2c4.2 12.6 17.8 19.4 30.4 15.2s19.4-17.8 15.2-30.4l-28.7-86.1c-1.4-4.1-2.1-8.3-2.1-12.6V235.5c18.4-3.5 36.3-8.9 53.6-16.3l11.9-5.1c12.2-5.2 17.8-19.3 12.6-31.5s-19.3-17.8-31.5-12.6L338.7 175c-26.1 11.2-54.2 17-82.7 17s-56.5-5.8-82.7-17l-11.9-5.1zM256 160a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"></path>
        </svg>
        <!-- Close icon (hidden by default) -->
        <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="d-none position-absolute">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
        </svg>
    </button>
    <div id="accessibilityMenu" class="accMenu bg-white border rounded shadow-sm p-3 mt-2 d-none position-absolute end-0 accesibleOpcion">
        <div class="d-grid gap-2">
            <h4>Tamaño del texto:</h4>
            <div class="btn-group" role="group" aria-label="radio toggle button group">
            <input data-action="decrease-any-font" type="radio" class="btn-check" name="font-size" id="decrease-50">
            <label class="btn btn-outline-dark" for="decrease-50">50%</label>
            
            <input data-action="decrease-font" type="radio" class="btn-check" name="font-size" id="decrease-75">
            <label class="btn btn-outline-dark" for="decrease-75">75%</label>
            
            <input data-action="normali-font" type="radio" class="btn-check" name="font-size" id="decrease-100" checked>
            <label class="btn btn-outline-dark" for="decrease-100">100%</label>
            
            <input data-action="increase-font" type="radio" class="btn-check" name="font-size" id="decrease-125">
            <label class="btn btn-outline-dark" for="decrease-125">125%</label>
            
            <input data-action="increase-more-font" type="radio" class="btn-check" name="font-size" id="decrease-150">
            <label class="btn btn-outline-dark" for="decrease-150">150%</label>
        </div>

            <button data-action="screen-reader" class="btn btn-outline-secondary text-start">Lectura de Pantalla</button>
            <button data-action="toggle-focus" class="btn btn-outline-secondary text-start">Recuadro de Enfoque</button>
            <button data-action="highlight-paragraphs" class="btn btn-outline-secondary text-start">Resaltar párrafos</button>
            <!--button data-action="epilepsy-safe" class="btn btn-outline-secondary text-start">Contraste para epilepsia</button-->
            <h4>Colores del filtro:</h4>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button data-action="filter-yellow" class="btn btn-outline-secondary text-start">Amarillo</button>
                <button data-action="filter-blue" class="btn btn-outline-secondary text-start">Azul</button>
                <button data-action="filter-white" class="btn btn-outline-secondary text-start">Blanco</button>
                <button data-action="filter-black" class="btn btn-outline-secondary text-start">Negro</button>
            </div>
        </div>
    </div>
</div>
