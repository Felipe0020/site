<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivo</title>
    <link rel="stylesheet" href="objetivo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

   
</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">PROJETO POLÍTICO DO CEEP</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
               
                <div class="card-container">
                    <a href="PROJETOCEEP.pdf" target="_blank">
                        <div class="card">
                            <div class="card-body text-center" >
                                <iframe src="PROJETOCEEP.pdf" class="MostrarPdf" width="100%"></iframe>
                                <button type="button" style="align-items-center" class="btn btn-success" >Abrir Documento</button>
                            </div>
                        </div>
                    </a>

                    <a href="REGIMENTOCEEP.pdf" target="_blank">
                        <div class="card">
                            <div class="card-body text-center">
                                <iframe src="REGIMENTOCEEP.PDF" class="MostrarPdf"></iframe>
                                <button type="button" class="btn btn-success" >Abrir Documento</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <?php include("footer.php"); ?>

</body>

</html>
