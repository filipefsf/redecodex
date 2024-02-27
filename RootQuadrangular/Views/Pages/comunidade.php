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
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                    <div class="friendsAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="friendsAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="community">
                <h2>Comunidade</h2>
                <div class="wraperCommunity">
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                    <div class="communityAuthor">
                        <img src="<?php echo INCLUDE_PATH_STATIC?>Images/avatar.jpg" />
                        <div class="communityAuthorInfo">
                            <h3>Fulano da Silva</h3>
                            <p>fulanodasilva@gmail.com</p>
                            <a href="<?php echo INCLUDE_PATH?>comunidade?solicitarAmizade=10">Solicitar amizade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>