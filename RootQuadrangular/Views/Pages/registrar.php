<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codex - Conecte-se com desenvolvedores ao redor do mundo!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/style.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="lateralEsquerdaFundo">
        <div class="textos">
            <h1>Code <i class="fa fa-xing" aria-hidden="true"></i></h1>
            <h3><i class="fa fa-codepen" aria-hidden="true"></i></h3>
            <p>Conecte-se com desenvolvedores de vários níveis de senioriedade!</p>
            <form class="formularioRegistroMobile formularioLoginMobile" action="" method="post">
                <h2>Quase lá... Crie sua conta já!<br> É fácil, rápido e seguro...</h2>
                <input type="text" name="nome" id="nomeRegistroMobile" placeholder="Nome completo" required>
                <input type="text" name="email" id="emailRegistroMobile" placeholder="Email" required>
                <input type="password" name="senha" id="senhaRegistroMobile" placeholder="Senha" required>
                <input type="password" name="senhaVal" id="senhaValRegistroMobile" placeholder="Repita sua senha" required>
                <input type="submit" value="Criar minha conta" action="acao"><br>
                <input type="hidden" name="registrar" value="registrar">
                <a href="<?php echo INCLUDE_PATH ?>">
                    <div class="linkRegistroMobile">
                        <p>Já tenho uma conta!</p>
                    </div>
                </a>
            </form>
        </div>
    </div>
    <div class="lateralDireitaFundo">
            <form class="formularioRegistro formularioLogin" action="" method="post">
                <h2>Quase lá... Crie sua conta já!<br> É fácil, rápido e seguro...</h2>
                <input type="text" name="nome" id="nomeRegistro" placeholder="Nome completo" required autofocus>
                <input type="text" name="email" id="emailRegistro" placeholder="Email" required>
                <input type="password" name="senha" id="senhaRegistro" placeholder="Senha" required>
                <input type="password" name="senhaVal" id="senhaValRegistro" placeholder="Repita sua senha" required>
                <input type="submit" value="Criar minha conta" action="acao"><br>  
                <input type="hidden" name="registrar" value="registrar">             
                <a href="<?php echo INCLUDE_PATH ?>">
                    <div class="linkRegistro">
                        <p>Já tenho uma conta!</p>
                    </div>
                </a>
            </form>
    </div>

</body>
</html>