<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curso Técnico em Estética</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include("menu.php"); ?>

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1 class="display-5 fw-bold text-primary">Curso Técnico em Estética</h1>
      <p class="lead">Cuide da beleza e do bem-estar com técnicas profissionais e responsabilidade.</p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="h4">Sobre o Curso</h2>
        <p>
          O curso capacita o aluno a realizar procedimentos estéticos faciais, corporais e capilares, promovendo saúde,
          autoestima e qualidade de vida. O técnico também aprende sobre cosmetologia, biossegurança e atendimento
          humanizado.
        </p>
        <p>
          É um curso com forte componente prático, que prepara o aluno para atuar em clínicas, salões e até abrir o
          próprio negócio.
        </p>
      </div>

      <div class="col-md-6 text-center">
        <img src="estetica.jpg" alt="Curso Técnico em Estética" class="img-fluid rounded shadow">
      </div>
    </div>


    <div>
      <nav class="tabs-nav">
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
              aria-selected="true"><strong>Áreas de Atuação</strong></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
              aria-selected="false"><strong>Matriz Curricular</strong></a>
          </li>

        </ul>
      </nav>


      <div class="tab-content mt-3" id="myTabsContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
          <p>O Técnico em Estética pode atuar em diversas áreas, como:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Clínicas de estética</li>
            <li class="list-group-item">Salões de beleza e SPAs</li>
            <li class="list-group-item">Consultórios dermatológicos</li>
            <li class="list-group-item">Empresas de cosméticos</li>
            <li class="list-group-item">Atendimento domiciliar e autônomo</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
          <div class="card col-12 col-md-4">
            <a href="ESTETICA.pdf" target="_blank">
              <div class="card-body text-center">
                <iframe src="ESTETICA.pdf" class="MostrarPdf" width="100%"></iframe>
                <button type="button" class="btn btn-success">Abrir
                  Documento</button>
              </div>
            </a>
          </div>
        </div>


      </div>
    </div>

    <div class="text-center mt-5">
      <a href="inscricoes.php" class="btn btn-primary btn-lg">Inscreva-se agora</a>
    </div>
  </div>

  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>