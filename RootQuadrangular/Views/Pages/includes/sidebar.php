<div class="sidebar">
            <h1>Code <i class="fa fa-xing" aria-hidden="true"></i></h1>
            <p>Bem-vindo(a) à Codex, <strong><?php echo $_SESSION['nome']; ?></strong>!</p>
            <h2>Menu</h2>
            <ul>
                <a href="<?php echo INCLUDE_PATH ?>"><li><i class="fa fa-codepen" aria-hidden="true"></i>Feed</li></a>
                <a href="<?php echo INCLUDE_PATH ?>perfil"><li><i class="fa fa-address-card-o" aria-hidden="true"></i>Perfil</li></a>
                <a href="<?php echo INCLUDE_PATH ?>comunidade"><li><i class="fa fa-users" aria-hidden="true"></i>Comunidade</li></a>
            </ul>
            <div class="finalSideBar">
                <a class="logout" href="<?php echo INCLUDE_PATH ?>?loggout">Sair <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                <p class="direitos">Todos os direitos reservados <i class="fa fa-copyright" aria-hidden="true"></i></p>
            </div>
        </div>