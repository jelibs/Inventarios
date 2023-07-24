<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa a tu cuenta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <center><img src="logo.jpeg" alt="" width="300" height="100"></center>
    <div class="login">
        <h1>Iniciar sesión</h1>

        <form action="autenticacion.php" method="post">
            <label for="correo">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="correo"
            placeholder="Email" id="correo" required>

            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña" id="password" required>
           
            <input type="submit" value="Acceder">
        </form>
        <br>
    </div>
    
</body>
</html>