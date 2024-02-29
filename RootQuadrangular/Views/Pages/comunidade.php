<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Codex, <?php echo $_SESSION['nome'];?>!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/comunidade.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-comunidade">
        <?php
            include('includes/sidebar.php');
        ?>
        <div class="friendsAndCommunity">
            <div class="friends">
                <h2>Amigos</h2>
                <div class="wraperFriends">
                    <?php
                        $comunidade = \RootQuadrangular\Models\UsuariosModel::listarComunidade();
                        foreach ($comunidade as $chave => $valor) {
                            if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) != "amigos") continue; //não lista quem não é amigo
                    ?>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3><?php echo $valor['nome'];?></h3>
                            <p><?php echo $valor['email'];?></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="community">
                <h2>Comunidade</h2>
                <div class="wraperCommunity">
                    <?php
                        $comunidade = \RootQuadrangular\Models\UsuariosModel::listarComunidade();
                        foreach ($comunidade as $chave => $valor) {
                            if($valor['email'] == $_SESSION['login']) continue; //não sugere a si próprio na amizade.
                    ?>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3><?php echo $valor['nome'];?></h3>
                            <p><?php echo $valor['email'];?></p>
                            <?php if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == ""){ ?>
                                <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=<?php echo $valor['id'];?>">Solicitar amizade</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "enviado") { ?>
                                <a id="solicitacaoEnviada" href="#">Solicitação Enviada!</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "recebido"){  ?>
                                <a id="aceitarAmizade" href="<?php echo INCLUDE_PATH?>comunidade?targetAccepted=<?php echo $valor['id'];?>">Aceitar</a>
                                <a id="recusarAmizade" href="<?php echo INCLUDE_PATH?>comunidade?targetRejected=<?php echo $valor['id'];?>">Recusar</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "amigos"){ ?>
                                <a id="amigos" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Amigos</a>
                            <?php } ?>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>