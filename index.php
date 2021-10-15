<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW - Agendamentos</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">Sistema Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consultarClientes.php">Consultar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row"> 
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-text">Sistema de Agendamento de Serviços.</p>
                    </div>
                    <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro">
                        <div class="mb-3">
                          <label for="nomeImput" class="form-label">Nome:</label>
                          <input type="text" class="form-control" name="nomeImput" required id="nomeImput">
                        </div>
                        <div class="mb-3">
                          <label for="telefoneImput" class="form-label">Telefone:</label>
                          <input type="tel" class="form-control" name="telefoneImput" required id="telefoneImput" placeholder="(xx)xxxx-xxxx">
                        </div>
                        <div class="mb-3">
                          <label for="origemImput" class="form-label">Origem:</label>
                          <select class="form-select" aria-label="Default select example" name="origemImput" required id="origemImput">
                            <option value="Celular" selected>Celular</option>
                            <option value="Fixo">Fixo</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Google Meu Negocio">Google Meu Negocio</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="dateImput" class="form-label">Data de Contato:</label>
                          <input type="date" class="form-control" name="dateImput" required id="dateImput">
                        </div>
                        <div class="mb-3">
                          <label for="obsImput" class="form-label">Observação:</label>
                          <textarea class="form-control" name="obsImput" id="obsImput"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                        </div>
                      </form>
                </div>
              </div>
        </div>
    </div>
</body>
</html>