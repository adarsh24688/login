<?php 
    require "permissao.php";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Entrar no Sistema</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1 style="color:white">
                    Sistema de Login Privado</h1>
                <h2 style="color:white">
                    Bem vindo Usuário!</h2>
                <div style="color:white" class="error-details">
                    Este é um sistema com segurança de login.
                </div>
                <div class="error-actions">
                    <a style="color:red" href="sair.php">Sair do Sistema</a>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>