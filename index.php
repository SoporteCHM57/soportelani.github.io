<?php include("templates/header.php");?>


<div class="container">
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenido al sistema</h1>
        <p class="col-md-8 fs-4"><?php echo $_SESSION['usuario']; ?></p>
    </div>
</div>

</div>
<div class="container" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="secciones\imagenes\Filosofia\01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Misión</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="secciones\imagenes\Filosofia\02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Visión</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="secciones\imagenes\Filosofia\03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Política de calidad</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="secciones\imagenes\Filosofia\04.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Politicas comerciales</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="secciones\imagenes\Filosofia\05.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>Nuestros valores</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<?php include("templates/footer.php");?>