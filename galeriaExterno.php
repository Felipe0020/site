<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="galeria.css">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12" id="topo">
                <h1 class="text-center">Veja todas as fotos</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/20250317_085434.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/20250317_085434.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/20250317_091221.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/20250317_091221.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/AGRO.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/AGRO.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/AGRO(1).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/AGRO(1).jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/AGRO(3).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/AGRO(3).jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/ESTACIONAMENTO.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/ESTACIONAMENTO.jpg">
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/ESTACIONAMENTO(1).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/ESTACIONAMENTO(1).jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/FACHADA(1).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/FACHADA(1).jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/HALL.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/HALL.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/PATIO.jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/PATIO.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/PATIO(1).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/PATIO(1).jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem"
                    href="imagemExterno/PATIO(2).jpg">
                    <img class="img-fluid definirAltura" src="imagemExterno/PATIO(2).jpg">
                </a>
            </div>
        </div>

    </div>
    <?php
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>Fancybox.bind("[data-fancybox='imagem']", {

        });</script>

</body>

</html>