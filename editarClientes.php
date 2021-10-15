<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<script src="js/funcoes.js"></script>-->
	<title>SISTEMA DE AGENDAMENTO - CLIENTES</title>
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
			<div class="card mb-3 col-12">
				<div class="card-body">
                    <div class="mb-3">
                        <h5 class="card-title">Editar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-text">Sistema de Edição de Agendamentos.</p>
                    </div>
					<?php
						$controller = new ControllerCadastro();
						$resultado = $controller->listar($_GET['id']);
                    ?>
					<form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>">
                            <div class="mb-3">
                                <label for="nomeImput" class="form-label">Nome:</label>
                                <input type="text" class="form-control" name="nomeImput" required id="nomeImput" value="<?php echo $resultado[0]['nome']; ?>">
							</div>
							<div class="mb-3">
                                <label for="telefoneImput" class="form-label">Telefone:</label>
								<input type="tel" class="form-control" name="telefoneImput" required id="telefoneImput" placeholder="(xx)xxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="mb-3">
                                <label for="origemImput" class="form-label">Origem:</label>
								<select class="form-select" aria-label="Default select example" name="origemImput" required id="origemImput">
									<option <?php if($resultado[0]['origem'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['origem'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['origem'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['origem'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['origem'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['origem'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
								</select>
							</div>
							<div class="mb-3">
                                <label for="dateImput" class="form-label">Data de Contato:</label>
								<input type="date" class="form-control" name="dateImput" required id="dateImput" value="<?php echo $resultado[0]['contato']; ?>">
							</div>
							<div class="mb-3">
                                <label for="obsImput" class="form-label">Observação:</label>
								<textarea class="form-control" name="obsImput" id="obsImput"><?php echo $resultado[0]['observacao']; ?></textarea>
							</div>
							<div class="mb-3">
                                <button type="submit" class="btn btn-dark">Editar</button>
                            </div>
						</form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>