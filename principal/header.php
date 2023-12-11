<header>
        <?php

            loginRepository::iniciarSesion();
            //COMPROBAR SI EXISTE SESSION
            if(!loginRepository::estaLog()){
                require_once 'headerNoLog.php';
            }else{
                $a=$_SESSION['user'];
                if (strtoupper(loginRepository::comprobar("user")->getCurso())==null) {
                    require_once 'headerAdmin.php';
                }else{
                    require_once 'headerCandidato.php';
                }
            }
        ?>
</header>