<?php
    if(!empty($_GET['auth'])) {
        echo "<script>
            (function (){alert('Usuário ou senha incorretos.');}())
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginCSS.css">
    <link type="image/png" sizes="16x16" rel="icon" href="../../imagens/icone1.png">
</head>
<body>

    <main>
        <div class="left">
            <h1>BeM Viagens</h1>
            <img src="imagens/viagem.svg"  class="viagem" alt="viagem">
        </div>
        <form method="POST" action="./processo.php">
        <div class="right">
            <div class="card-login">
                <h1>Login</h1>
                    <div class="usuario-texto">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário">
                </div>

                <div class="usuario-texto">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                </div>
                    <input type="submit" class="btn-login" value="Entrar">
                <div class="cadastro">
                
                    <p>Ainda não é cadastrado? <a href="../tela de cadastro/cadastro.html">Clique Aqui</a> e se cadastre!</p>
                </div>
                
            </div>
        </form>
        </div>
    </main>
    
</body>
</html>