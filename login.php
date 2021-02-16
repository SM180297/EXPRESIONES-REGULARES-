<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/udb.ico" type="image/ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/registro.js"></script>
</head>

<body>

    <main role="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form class="form-signin" action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="text-center mb-4">
                            <br><br>
                            <h1 class="h3 mb-3 font-weight-normal">Registro de cuenta</h1>
                        </div>
                        <div class="form-label-group">
                            <input type="User" id="inputUser" name="txtUser" class="form-control" placeholder="Usuario" required autofocus>
                            <label for="inputEmail">Nombre de usuario</label>
                        </div>

                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Correo electronico" required>
                            <label for="inputEmail">Correo electronico</label>
                        </div>

                        <div class="form-label-group">
                            <input id="inputPassword" name="txtPassword" class="form-control" placeholder="Contraseña" required>
                            <label for="inputPassword">Contraseña</label>
                        </div>
                        <div class="form-label-group">
                            <input id="inputREPassword" name="txtPassword2" class="form-control" placeholder="Contraseña" required>
                            <label for="inputPassword">Confirmar Contraseña</label>
                        </div>


                        <div class="checkbox mb-3">
                            <label>

              </label>
                        </div>



                        <input  class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" id="Mybtn" value="enviar">
                        <p class="msgMateria">Lenguajes interpretados en El Servidor</p>
                    </form>
                </div>
            </div>

            <hr>
            <hr>

        </div>
        <!-- /Cierre de contenido -->

    </main>
    <?php
    if (isset($_POST['enviar'])) {
         
        $user = isset($_POST['txtUser'])?$_POST['txtUser']:"None";
        $email = isset($_POST['txtEmail'])?$_POST['txtEmail']:"email@hotmail.com";
        $password = isset($_POST['txtPassword'])?$_POST['txtPassword']:'Tsuyomi23';
        $password2 = isset($_POST['txtPassword2'])?$_POST['txtPassword2']:'Tsuyomi23';

        if (preg_match("/^[a-zA-Z0-9_-]{5,10}$/",$user)==1) 
        {
            echo "<h3 class=\"st\">Felicidades usario ingresado correctamente</h3>";
        }
        else
        {
            echo "<p class=\"p\">Usuario: Debe llevar numero entre 5 y 10</p>";
        }

        if(preg_match("/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/",$email)==1)
        {
            echo "<h3 class=\"st\">Felicidades tu expresion paso la del correo</h3>";
        }else
        {
            0;
        }

        if(preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/",$password)==1)
        {
            echo "<h3 class=\"st\">Contraseña Correcta</h3>";
        }
        else
        {
            echo "<p class=\"p\">La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
            NO puede tener otros símbolos.</p>";
        }

        if($password==$password2)
        {
            0;
        }
        else
        {
            echo "<p class=\"p\">Compruebe que la contraseña sea la correcta en el campo anterior</p>"; 
        }
    }
       
    ?>
    <footer class="container">
        <p class="copy">Universidad Don Bosco 2020 &copy; </p>
    </footer>

</html>