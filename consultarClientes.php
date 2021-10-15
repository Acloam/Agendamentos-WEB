<?php
require_once("controller/controllerCadastro.php");
?>
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
    <script>
        function confirmDelete(delURL){
            if(confirm("Deseja apagar o registro?")){
                document.location = delURL;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Sistema Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Consultar</a>
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
                        <h5 class="card-title">Consultar - Consulta de Potenciais Clientes</h5>
                        <p class="card-text">Sistema de Consulta de Agendamentos.</p>
                        <table class="table table-dark table-hover table-striped mb-3">
                            <thead>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Ação</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                <?php
                                    $controller = new ControllerCadastro();
                                    $resultado = $controller->listar(0);
                                    for($i=0;$i<count($resultado);$i++){
                                        ?>
                                        <tr>
                                            <td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
                                            <td scope="col"><?php echo $resultado[$i]['telefone']; ?></td>
                                            <td scope="col"><?php echo $resultado[$i]['origem']; ?></td>
                                            <td scope="col"><?php echo $resultado[$i]['contato']; ?></td>
                                            <td scope="col"><?php echo $resultado[$i]['observacao']; ?></td>
                                            <td scope="col">
                                                <button type="button" class="btn btn-outline-light" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
                                                <button type="button" class="btn btn-outline-light" onclick="javascript:confirmDelete('excluirClientes.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>
</body>
</html>