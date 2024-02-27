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
                        </div>
                    </div>
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. 
                        </p>
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/exemplopost1.jpg" />
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/exemplopost2.jpg" />
                    </div>
                </div>
                <div class="singlePost">
                    <div class="postAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="postAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>20:34 20/01</p>
                        </div>
                    </div>
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. </p>
                    </div>
                </div>
                <div class="singlePost">
                    <div class="postAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="postAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>20:34 20/01</p>
                        </div>
                    </div>
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. </p>
                    </div>
                </div>
                <div class="singlePost">
                    <div class="postAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="postAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>20:34 20/01</p>
                        </div>
                    </div>
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. </p>
                    </div>
                </div>
                <div class="singlePost">
                    <div class="postAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="postAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>20:34 20/01</p>
                        </div>
                    </div>
                    <div class="conteudoPost">
                        <p>Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant 
                            anshu ahsu qyuoo fiuo fkfpe Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe.
                            Lorem Ipsum contant anshu ahsu qyuoo fiuo fkfpe. </p>
                    </div>
                </div>
            </div>
            <div class="friendsRequest">
                <h4>Solicitações</h4>
                <div class="friendsRequestSingle">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                    <div class="friendRequestSingleInfo">
                        <h5>Ciclano Ferreira</h5>
                        <p><a class="addFriend" href="">Aceitar</a> | <a class="rejFriend" href="">Recusar</a></p>
                    </div>
                </div>
                <div class="friendsRequestSingle">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                    <div class="friendRequestSingleInfo">
                        <h5>Neresmo Torres</h5>
                        <p><a class="addFriend" href="">Aceitar</a> | <a class="rejFriend" href="">Recusar</a></p>
                    </div>
                </div>
                <div class="friendsRequestSingle">
                    <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                    <div class="friendRequestSingleInfo">
                        <h5>Adrivaldo Caetano</h5>
                        <p><a class="addFriend" href="">Aceitar</a> | <a class="rejFriend" href="">Recusar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>