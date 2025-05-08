<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-12">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Técnico em Edificações</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include("menu.php"); ?>

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1 class="display-5 fw-bold text-success">Curso Técnico em Edificações</h1>
      <p class="lead">Projete, gerencie e acompanhe obras com excelência técnica e responsabilidade.</p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="h4">Sobre o Curso</h2>
        <p>
          O curso forma profissionais para atuar no planejamento, execução e fiscalização de obras civis.
          O técnico em edificações elabora desenhos técnicos, auxilia na leitura e interpretação de projetos e realiza
          orçamentos, sempre atento às normas técnicas e segurança.
        </p>
        <p>
          Ele é o elo entre o engenheiro civil e os profissionais da obra, garantindo a qualidade do serviço
          prestado.
        </p>
      </div>

      <div class="col-md-6 text-center">
        <img src="edificacoes.jpg" alt="Curso Técnico em Edificações" class="img-fluid rounded shadow">
      </div>
    </div>


    <div>
      <nav class="tabs-nav">
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active text-success" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
              aria-selected="true"><strong>Áreas de Atuação</strong></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link text-success" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
              aria-selected="false"><strong>Matriz Curricular</strong></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link text-success" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
              aria-selected="false"><strong>Plano de Curso</strong></a>
          </li>
        </ul>
      </nav>


      <div class="tab-content mt-3" id="myTabsContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
          <p>O Técnico em Edificações pode atuar em diversas áreas, como:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Construtoras e empreiteiras</li>
            <li class="list-group-item">Escritórios de engenharia e arquitetura</li>
            <li class="list-group-item">Prefeituras e órgãos públicos</li>
            <li class="list-group-item">Indústrias e manutenção predial</li>
            <li class="list-group-item">Fiscalização de obras e controle de qualidade</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        
          <div class="card col-12 col-md-4">
            <a href="documentos/EDIFICACOES.pdf" target="_blank">
              <div class="card-body text-center">
                <iframe src="documentos/EDIFICACOES.pdf" class="MostrarPdf" width="100%"></iframe>
                <button type="button" class="btn btn-success">Abrir
                  Documento</button>
              </div>
            </a>
          </div>
        
        </div>


        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        
          <div class="card col-12 col-md-4">
            <a href="documentos/edificacoes1.pdf" target="_blank">
              <div class="card-body text-center">
                <iframe src="documentos/edificacoes1.pdf" class="MostrarPdf" width="100%"></iframe>
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