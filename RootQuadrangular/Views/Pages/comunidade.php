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
            //inclusão dinâmica da sidebar que será a mesma em Feed, Perfil e Comunidade
            include('includes/sidebar.php');
        ?>
        <div class="friendsAndCommunity">
            <div class="friends">
                <h2>Amigos</h2>
                <div class="wraperFriends">
                    <?php
                        //listagem de amigos na aba 'Comunidade'. Com o if, ele não lista quem não é amigo!
                        $comunidade = \RootQuadrangular\Models\UsuariosModel::listarComunidade();
                        foreach ($comunidade as $chave => $valor) {
                            if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) != "amigos") continue;
                    ?>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3><?php echo $valor['nome'];?></h3>
                            <p><?php echo $valor['email'];?></p>
                        </div><!--friendsAuthorInfo-->
                    </div><!--friendsAuthor-->
                <?php } ?>
                </div><!--wraperFriends-->
            </div><!--friends-->
            <div class="community">
                <h2>Comunidade</h2>
                <div class="wraperCommunity">
                    <?php
                        //mostra toda a comunidade para o usuário exceto a si mesmo
                        $comunidade = \RootQuadrangular\Models\UsuariosModel::listarComunidade();
                        foreach ($comunidade as $chave => $valor) {
                            if($valor['email'] == $_SESSION['login']) continue;
                    ?>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3><?php echo $valor['nome'];?></h3>
                            <p><?php echo $valor['email'];?></p>

                            <?php if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == ""){ ?>
                                <!--Não existe solicitação de amizade-->
                                <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=<?php echo $valor['id'];?>">Solicitar amizade</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "enviado") { ?>
                                <!--O usuário já enviou um pedido de amizade-->
                                <a id="solicitacaoEnviada" href="#">Solicitação Enviada!</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "recebido"){  ?>
                                <!--O usuário recebeu uma solicitação de amizade-->
                                <a id="aceitarAmizade" href="<?php echo INCLUDE_PATH?>comunidade?targetAccepted=<?php echo $valor['id'];?>">Aceitar</a>
                                <a id="recusarAmizade" href="<?php echo INCLUDE_PATH?>comunidade?targetRejected=<?php echo $valor['id'];?>">Recusar</a>
                            <?php } else if((\RootQuadrangular\Models\AmizadesModel::verificaSolicitacaoAmizade($valor['id'])) == "amigos"){ ?>
                                <!--O usuário já é amigo deste-->
                                <a id="amigos" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Amigos</a>
                            <?php } ?>
                        </div><!--communityAuthorInfo-->
                    </div><!--communityAuthor-->
                    <?php } ?>
                </div><!--wraperCommunity-->
            </div><!--community-->
        </div><!--friendsAndCommunity-->
    </div> <!--main-comunidade-->
</body>

</html>