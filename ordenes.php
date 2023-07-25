<?php
// recogemos datos enviados desde el formulario de registro
//$u = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
//$p = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
// generamos el hash a partir de la contraseña enviada desde el formulario
$p_hashed = password_hash("12345678", PASSWORD_BCRYPT);
// almacenamos la informa del usuario en base de datos
// la siguiente función es solo un ejemplo
echo $p_hashed."\n";
if (password_verify("12345678",$p_hashed)) {
    echo "¡La contraseña es válida!";
} else {
    echo "La contraseña no es válida.";
}
?>