<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curso Técnico em Desenvolvimento de Sistemas</title>

</head>

<body>

  <?php include("menu.php"); ?>

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1 class="display-5 fw-bold text-success">Curso Técnico em Desenvolvimento de Sistemas</h1>
      <p class="lead">Crie, programe e gerencie soluções tecnológicas para o mundo digital.</p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="h4">Sobre o Curso</h2>
        <p>
          O curso capacita o aluno para desenvolver softwares, aplicativos, sites e sistemas em diversas plataformas.
          Com foco em programação, banco de dados, lógica e boas práticas, o técnico poderá atuar desde o planejamento
          até a manutenção de sistemas informatizados.
        </p>
        <p>
          O profissional estará apto a trabalhar em diferentes segmentos da área de TI, com domínio de linguagens de
          programação e ferramentas modernas.
        </p>
      </div>

      <div class="col-md-6 text-center">
        <img src="sistemas.jpg" alt="Desenvolvimento de Sistemas" class="img-fluid rounded shadow">
      </div>
    </div>



    <div>
      <nav class="tabs-nav">
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active text-success" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab"
              aria-controls="tab1" aria-selected="true "><strong>Áreas de Atuação</strong></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link text-success" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab"
              aria-controls="tab2" aria-selected="false "><strong>Matriz Curricular</strong></a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link text-success" id="tab2-tab" data-bs-toggle="tab" href="#tab3" role="tab"
              aria-controls="tab3" aria-selected="false "><strong>Plano de Curso</strong></a>
          </li>
        </ul>
      </nav>


      <div class="tab-content mt-3" id="myTabsContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
          <p>O Técnico em Desenvolvimento de Sistemas pode atuar em diversas áreas, como:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Empresas de tecnologia e startups</li>
            <li class="list-group-item">Instituições financeiras</li>
            <li class="list-group-item">Órgãos públicos e privados</li>
            <li class="list-group-item">Fábricas de software e consultorias</li>
            <li class="list-group-item">Desenvolvimento web e mobile</li>
            <li class="list-group-item">Trabalho remoto e freelancer</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
         
            <div class="card col-12 col-md-4">
              <a href="DESENVOLVIMENTO.pdf" target="_blank">
                <div class="card-body text-center">
                  <iframe src="DESENVOLVIMENTO.pdf" class="MostrarPdf" width="100%"></iframe>
                  <button type="button" class="btn btn-success">Abrir
                    Documento</button>
                </div>
              </a>
            </div>
          
        </div>

        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
         
            <div class="card col-12 col-md-4">
              <a href="desenvolvimento1.pdf" target="_blank">
                <div class="card-body text-center">
                  <iframe src="desenvolvimento1.pdf" class="MostrarPdf" width="100%"></iframe>
                  <button type="button" class="btn btn-success">Abrir
                    Documento</button>
                </div>
              </a>
            </div>
          

        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>