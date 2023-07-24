<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo_registro.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <center><img src="logo.jpeg" alt="" width="300" height="100"></center>
    <div class="login">
        <h1>Crear cuenta</h1>

        <form action="registrar_usuario.php" method="post">

        <label for="correo">
            <i class="fa-solid fa-id-badge"></i>
            </label>
            <input type="text" name="nombre"
            placeholder="Nombre" id="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required>
            <i class="fa fa-check check-ok"></i>
            <label for="correo">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="correo"
            placeholder="Email" id="correo" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@(gpcpuebla.com)*$" required>
            <i class="fa fa-check check-ok"></i>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña" id="password"  pattern="[A-Za-z0-9!?-]{8,12}" required>
            <i class="fa fa-check check-ok"></i>
            <input type="submit"  name="registrar" value="Registrar">
        </form>
        <br>
    </div>
    
</body>
</html>