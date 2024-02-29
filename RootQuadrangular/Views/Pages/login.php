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
            <p>Conecte-se com desenvolvedores de vários níveis de senioridade!</p>
            <form class="formularioLoginMobile" action="" method="post">
                <h2>Faça seu login <br>ou registre-se!</h2>
                <input type="text" name="email" id="emailMobile" placeholder="Email" required>
                <input type="password" name="senha" id="senhaMobile" placeholder="Senha" required>
                <input type="submit" value="Entrar" action="acao">
                <input type="hidden" name="login">
                <a href="<?php echo INCLUDE_PATH ?>registrar">
                    <div class="linkRegistroMobile">
                        <p>Criar nova conta</p>
                    </div><!--linkRegistroMobile-->
                </a>
            </form><!--formularioLoginMobile-->
        </div><!--textos-->
    </div><!--lateralEsquerdaFundo-->
    <div class="lateralDireitaFundo">
            <form class= "formularioLogin" action="" method="post">
                <h2>Faça seu login <br>ou registre-se!</h2>
                <input type="text" name="email" id="emailLogin" placeholder="Email" required autofocus>
                <input type="password" name="senha" id="senhaLogin" placeholder="Senha" required>
                <input type="submit" value="Entrar" action="acao"><br>
                <input type="hidden" name="login">
                <a href="<?php echo INCLUDE_PATH ?>registrar">
                    <div class="linkRegistro">
                        <p>Criar nova conta</p>
                    </div><!--linkRegistro-->
                </a>
            </form><!--formularioLogin-->
    </div><!--lateralDireitaFundo-->
</body>
</html>