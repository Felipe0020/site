<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curso Técnico em Agricultura</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include("menu.php"); ?>

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1 class="display-5 fw-bold text-success">Curso Técnico em Agricultura</h1>
      <p class="lead">Capacitando profissionais para o manejo sustentável e a produção agrícola eficiente.</p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="h4">Sobre o Curso</h2>
        <p>O Curso Técnico em Agricultura prepara o aluno para atuar diretamente na produção agrícola, manejando culturas, solo, irrigação, fertilização e colheita com base em técnicas modernas e sustentáveis.</p>
        <p>O curso alia teoria e prática com atividades em campo, possibilitando ao aluno uma formação sólida e voltada ao mercado.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="agricultura.jpg" alt="Curso Técnico em Agricultura" class="img-fluid rounded shadow">
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
          <p>O Técnico em Agricultura pode atuar em diversas áreas, como:</p>
          <ul class="list-group list-group-flush">
        <li class="list-group-item">Fazendas e propriedades rurais</li>
        <li class="list-group-item">Empresas agrícolas e cooperativas</li>
        <li class="list-group-item">Instituições de pesquisa e extensão rural</li>
        <li class="list-group-item">Empresas de insumos e máquinas agrícolas</li>
        <li class="list-group-item">Consultoria técnica agrícola</li>
        <li class="list-group-item">Setor público ligado ao desenvolvimento rural</li>
      </ul>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
          <div class="card col-12 col-md-4">
            <a href="AGRICULTURA.pdf" target="_blank">
              <div class="card-body text-center">
                <iframe src="AGRICULTURA.pdf" class="MostrarPdf" width="100%"></iframe>
                <button type="button" class="btn btn-success">Abrir
                  Documento</button>
              </div>
            </a>
          </div>
        </div>


      </div>
    </div>

    <div class="text-center mt-5">
      <a href="inscricoes.php" class="btn btn-success btn-lg">Inscreva-se agora</a>
    </div>
  </div>

  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
