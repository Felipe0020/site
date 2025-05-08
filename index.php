<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <?php include("menu.php"); ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top:3px">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="art1.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="art2.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="art3.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!--Notícias -->
    <div class="container mb-12">
        <div class="row  mt-5">

            <!-- Notícia 1 -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center">
                    <a href="https://escolatecnicalaranjeiras.com.br/2022/02/05/volta-as-aulas/">
                        <img src="voltaaula.jpeg" class="card-img-top" alt="">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Abertura do Ano Letivo</h5>
                    </div>

                </div>
            </div>

            <!-- Notícia 2 -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center">
                    <a href="https://escolatecnicalaranjeiras.com.br/2021/11/05/inscricoes-para-os-cursos-profissionalizantes/">
                        <img src="inscricao.png" class="card-img-top" alt="">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Inscrições Abertas</h5>
                    </div>

                </div>
            </div>

            <!-- Notícia 3 -->
            <div class="col-md-4 mb-4 ">
                <div class="card text-center">
                    <a href="https://escolatecnicalaranjeiras.com.br/2021/12/17/lista-de-classificacao-para-os-cursos-tecnicos-2022/">
                        <img src="classificados.jpeg" class="card-img-top" alt="">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Classificação 2025</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
</body>

</html>