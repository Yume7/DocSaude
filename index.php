<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../DocSaude/CSS/cadastro_css.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="../DocSaude/imagens/WhatsApp_Image_2024-05-16_at_23.09.45-removebg-preview.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-bottom">
      <a class="navbar-brand" href="#">DocSaúde</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2>Cadastro de Pacientes</h2>
    <form id="multiStepForm" action="processo_php/process_form.php" method="post">
      <!-- Step 1: Informações Básicas -->
      <div class="step">
        <h4>Informações Básicas</h4>
        <div class="form-group">
          <label for="nome">Nome Completo:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
          <label for="data_nascimento">Data de Nascimento:</label>
          <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="form-group">
          <label for="genero">Gênero:</label>
          <select class="form-control" id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Próximo</button>
      </div>

      <!-- Step 2: Histórico Médico -->
      <div class="step" style="display:none;">
        <h4>Histórico Médico</h4>
        <div class="form-group">
          <label for="condicoes_medicas">Condições Médicas Pré-existentes:</label>
          <textarea class="form-control" id="condicoes_medicas" name="condicoes_medicas" required></textarea>
        </div>
        <div class="form-group">
          <label for="alergias">Alergias:</label>
          <textarea class="form-control" id="alergias" name="alergias" required></textarea>
        </div>
        <div class="form-group">
          <label for="medicamentos">Medicamentos Atuais:</label>
          <textarea class="form-control" id="medicamentos" name="medicamentos" required></textarea>
        </div>
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Voltar</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Próximo</button>
      </div>

      <!-- Step 3: Informações de Seguro -->
      <div class="step" style="display:none;">
        <h4>Informações de Seguro (opcional)</h4>
        <div class="form-group">
          <label for="plano_saude">Nome do Plano de Saúde:</label>
          <input type="text" class="form-control" id="plano_saude" name="plano_saude">
        </div>
        <div class="form-group">
          <label for="numero_apolice">Número da Apólice:</label>
          <input type="text" class="form-control" id="numero_apolice" name="numero_apolice">
        </div>
        <div class="form-group">
          <label for="validade">Validade:</label>
          <input type="date" class="form-control" id="validade" name="validade">
        </div>
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Voltar</button>
        <button type="button" class="btn btn-primary" onclick="nextStep()">Próximo</button>
      </div>

      <!-- Step 4: Motivo da Consulta -->
      <div class="step" style="display:none;">
        <h4>Motivo da Consulta</h4>
        <div class="form-group">
          <label for="sintomas">Sintomas:</label>
          <textarea class="form-control" id="sintomas" name="sintomas" required></textarea>
        </div>
        <div class="form-group">
          <label for="duracao_sintomas">Duração dos Sintomas:</label>
          <input type="text" class="form-control" id="duracao_sintomas" name="duracao_sintomas" required>
        </div>
        <div class="form-group">
          <label for="perguntas">Perguntas Específicas:</label>
          <textarea class="form-control" id="perguntas" name="perguntas" required></textarea>
        </div>
        <button type="button" class="btn btn-secondary" onclick="prevStep()">Voltar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </form>
  </div>

  <!-- Modal de Sucesso -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Cadastro Realizado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          O cadastro foi realizado com sucesso!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5>Sobre Nós</h5>
          <p>Informações sobre a empresa, missão, visão e valores.</p>
        </div>
        <div class="col-md-4">
          <h5>Links Úteis</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Sobre</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Redes Sociais</h5>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12 text-center">
          <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </footer>


 
  <script src="https://kit.fontawesome.com/31255e0966.js" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var currentStep = 0;

    function showStep(step) {
      $('.step').hide();
      $('.step').eq(step).show();
    }

    function nextStep() {
      currentStep++;
      showStep(currentStep);
    }

    function prevStep() {
      currentStep--;
      showStep(currentStep);
    }

    $('#multiStepForm').on('submit', function(event) {
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(response) {
          $('#successModal').modal('show');
        },
        error: function(xhr, status, error) {
          alert('Ocorreu um erro ao tentar enviar o formulário.');
        }
      });
    });

    // Inicializa a primeira etapa
    showStep(currentStep);
  </script>
</body>

</html>