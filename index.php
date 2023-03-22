<?php
    require("header.php")
?>

    <!-- Carrrusel-->
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/1_banner.png" class="d-block w-100 img-thumbnail">
                </div>
                <div class="carousel-item">
                    <img src="/images/2_banner.png" class="d-block w-100 img-thumbnail">
                </div>
                <div class="carousel-item">
                    <img src="/images/3_banner.png" class="d-block w-100 img-thumbnail">
                </div>
                <div class="carousel-item">
                    <img src="/images/4_banner.png" class="d-block w-100 img-thumbnail">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span id="carousel_recorrer" class="carousel-control-prev-icon text-body-tertiary"
                    aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span id="carousel_recorrer" class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!--NOTICIAS-->
    <div class="container">
        <h3 id="subtitulo">NOTICIAS UTP</h3>
        <div class="container_cards">
            <div class="card col-3">
                <img src="/images/1_noticias.jpg" class="card-img-top img-thumbnail">
                <div class="card-body">
                    <p class="card-text">
                        Consulta el manual de protocolos para el retorno seguro 2022.
                    </p>
                </div>
            </div>
            <div class="card col-3">
                <img src="/images/2_noticias.jpg" class="card-img-top img-thumbnail">
                <div class="card-body">
                    <p class="card-text">
                        Convocatoria para práctias profesionales y estadías 2023.
                    </p>
                </div>
            </div>
            <div class="card col-3">
                <img src="/images/3_noticias.jpg" class="card-img-top img-thumbnail">
                <div class="card-body">
                    <p class="card-text">
                        Conferencia "El papel de la creatividad al servicio de los alimentos".
                    </p>
                </div>
            </div>
            <div class="card col-3">
                <img src="/images/4_noticias.jpg" class="card-img-top img-thumbnail">
                <div class="card-body">
                    <p class="card-text">
                        Conferencia "Abastecimiento ecológiamente responsable".
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php
    require("footer.php")
?>