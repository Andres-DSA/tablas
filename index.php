<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <div class="content">
                <div class="input">
                    <h1>Tablas de multiplicacion!!</h1>
                    <input class="input" type="text" name="numero" autocomplete="off" placeholder="Ingrese su numero">
                    <input class="input" type="submit" value="Consultar">
                </div>
                <?php
                    if(isset($_POST["numero"]) && $_POST["numero"]!=""){
                        include "funcion.php";
                    }
                ?>
            </div>
        </form>
    </body>
    </html>