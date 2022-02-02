<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    if (!$_COOKIE['idioma_seleccionado']) {  //fijate haber si hemos pasado por la pagina de crear cookie, saber si hay una cookie

        header("location:pag1.php");    //si no has creado la cookie direje al usuario a esta pagina

    } else if ($_COOKIE['idioma_seleccionado'] == "es") {
        header("Location:spanish.php");
    } else if ($_COOKIE['idioma_seleccionado'] == "in") {
        header("Location: english.php");
    }


    ?>


</body>

</html>