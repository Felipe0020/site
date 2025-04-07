<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curso Técnico em Farmácia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include("menu.php"); ?>

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1 class="display-5 fw-bold text-primary">Curso Técnico em Farmácia</h1>
      <p class="lead">Domine a manipulação de medicamentos e contribua para a saúde com responsabilidade.</p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2 class="h4">Sobre o Curso</h2>
        <p>
          O curso técnico em Farmácia prepara o aluno para atuar em laboratórios, drogarias, farmácias de manipulação e hospitais, auxiliando na produção, controle de qualidade, armazenamento e distribuição de medicamentos.
        </p>
        <p>
          O técnico também estará apto a orientar pacientes sobre o uso correto de medicamentos e participar de campanhas de saúde pública.
        </p>
      </div>

      <div class="col-md-6 text-center">
        <img src="farmacia.jpg" alt="Curso Técnico em Farmácia" class="img-fluid rounded shadow">
      </div>
    </div>

    <div class="mt-5">
      <h2 class="h4">Áreas de Atuação</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Farmácias e drogarias</li>
        <li class="list-group-item">Farmácias de manipulação</li>
        <li class="list-group-item">Hospitais públicos e privados</li>
        <li class="list-group-item">Laboratórios de análises clínicas</li>
        <li class="list-group-item">Distribuidoras e indústrias farmacêuticas</li>
      </ul>
    </div>

    <div class="text-center mt-5">
      <a href="inscricoes.php" class="btn btn-primary btn-lg">Inscreva-se agora</a>
    </div>
  </div>

  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
