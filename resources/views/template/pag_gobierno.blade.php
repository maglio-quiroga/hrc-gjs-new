

<div class="pagespublic" style="background-color: #FAFAFA">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title" style="padding-bottom: 50px">Enlaces de Interés</h2>
                </div>
            </div>
        </div>
        <div class="row pagespublic_row">
            <!-- Features Item -->
            @foreach($enlaces_interes as $enlace)
                <div class="col-lg-4 col-sm-6 pagepublic_col">
                    <x-enlace :enlace="$enlace"/>
                </div>
            @endforeach

        </div>
    </div>
</div>