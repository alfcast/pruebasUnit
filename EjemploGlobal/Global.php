<?php
//para deshabilitar la proteccion del navegador
header('X-XSS-Protection:0');
session_start();

/**
 * FUNCIONES ANTI CSRF
 */

 /**
 * Genera token anti-CSRF y lo almacena en la sesión
 *
 * @return void
 */
function generateSessionToken()
{
    if (isset($_SESSION['csrf_token'])) {
        unset($_SESSION['csrf_token']);
    }
    $_SESSION['csrf_token'] = md5(uniqid(rand(), true));
    $_SESSION['csrf_token_time'] = time();
}

/**
 * Verifica si el token recibido por POST es igual al de la SESION
 *
 * @return void
 */
function csrf_token_is_valid()
{
    if (isset($_POST['csrf_token'])) {
        $user_token = $_POST['csrf_token'];
        $stored_token = $_SESSION['csrf_token'];
        return $user_token === $stored_token;
    }

    return false;
}

class Cuenta
{
    public static $contador = 0;

    public function valorStatic() {
        return self::$contador;
    }

    public function aumentaStatic(){
        self::$contador++;
    }
}

?>
