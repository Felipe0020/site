<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="historico.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJxn+2eX6K9fE2Wk4gPfUWaYk5g5c8K4P3cbkjGZ5DxkS8t5RjIN/tntq0yf" crossorigin="anonymous">
</head>
<body>
<?php
    include("menu.php");
    ?>

    <div class="container">
        <div class="row">
            <div>
                <h3 class="text-center" id="FALE">NOTÍCIAS</h3>
            </div>
        </div>
    </div>
        <!--Notícias -->
        <div class="container mb-12">
        <div class="row">

            <div class="container mt-4">
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


        </div>
    </div>

  
    <?php include("footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</html>
