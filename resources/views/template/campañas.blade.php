<div class="campañas">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Campañas de Salud</h2>
                </div>
            </div>
        </div>
        <div class="row campaña_row">
            @foreach($campañas as $campaña)
                <div class="col-lg-4 col-md-4 col-sm-12 campaña_col">
                    <div class="campaña text-center trans_400">
                        <a href="{{ $campaña['link'] }}" target="_blank" class="pagepublic_icon">
                            <img src="{{ $campaña['image'] }}" alt="Descripción de la Imagen">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
