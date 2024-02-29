<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Codex, <?php echo $_SESSION['nome'];?>!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-feed">
        <?php
            //inclusão dinâmica da sidebar que será a mesma em Feed, Perfil e Comunidade
            include('includes/sidebar.php');
        ?>
        <div class="feed">
            <div class="wraper">
                <div class="singlePost">
                    <div class="postAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="postAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>20:34 20/01</p>
                        </div><!--postAuthorInfo-->
                    </div><!--postAuthor-->
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. 
                        </p>
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/exemplopost1.jpg" />
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/exemplopost2.jpg" />
                    </div><!--conteudoPost-->
                </div><!--singlepost-->
            </div><!--wraper-->
            <div class="friendsRequest">
                <h4>Solicitações</h4>
                <?php
                    $solicitacoes = \RootQuadrangular\Models\AmizadesModel::listarSolicitacoes($_SESSION['id']);
                    foreach ($solicitacoes as $chave => $valor) {
                ?>
                <div class="friendsRequestSingle">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                    <div class="friendRequestSingleInfo">
                        <h5><?php echo $valor['nome'];?></h5>
                        <p><a class="addFriend" href="<?php echo INCLUDE_PATH?>?targetAccepted=<?php echo $valor['enviou'];?>">Aceitar</a> | 
                            <a class="rejFriend" href="<?php echo INCLUDE_PATH?>?targetRejected=<?php echo $valor['enviou'];?>">Recusar</a></p>
                    </div>
                </div><!--friendsRequestSingle-->
                <?php }?>
            </div><!--friendsRequest-->
        </div><!---feed--->
    </div><!--main-feed-->
</body>

</html>