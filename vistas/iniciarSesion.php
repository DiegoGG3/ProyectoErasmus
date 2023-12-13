<?php  
$conexion = DB::abreConexion();
$valida=new Validacion();
$repository = new DB();

$login = new Login($repository,$conexion);



if (isset($_POST['login'])) {
    $valida->Requerido('username');
    $valida->Requerido('password');

    if ($valida->ValidacionPasada()) {
        // Autenticar al usuario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Llama al método Identifica en la instancia de Login
        $login->Identifica($username, $password);

        if ($login->UsuarioEstaLogueado()) {
            // Inicio de sesión exitoso
            $_SESSION['username'] = $username;
        }

       
    }
}
?>

<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Iniciar Sesión</title>
    </head>
    <body id='bodyInicio'>
        <div class='container'>
            <h2 id='titulo'>Iniciar Sesión</h2>
        <form method='post' id='formInicio'>
            <div class='input-container'>
                <label for='username' class='labelInicio'>DNI de usuario</label>
                <input type='text' id='username' name='username' required class='inputInicio'>
            </div>
            <div class='input-container'>
                <label for='password' class='labelInicio'>Contraseña</label>
                <input type='password' id='password' name='password' required class='inputInicio'>
            </div>
            <button type='submit' name='login' id='botonInicio'>Iniciar Sesión</button><br>
            <a href='?menu=Registro' id='enlaceBoton'>Regístrate</a>
        </form>
    
        </div>
    </body>
    </html>