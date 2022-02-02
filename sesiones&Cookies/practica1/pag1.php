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
    if (isset($_COOKIE['idioma_seleccionado'])) { //mira a ver si alguna cookie 

        if (isset($_COOKIE['idioma_']) == "es") {
            header("location:spanish.php");
        } else if (isset($_COOKIE['idioma_']) == "in") {
            header("location:english.php");
        }
    }
    ?>
    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align"center">
                <h1>Elige idioma</h1>
            </td>
        </tr>
        <tr>
            <td align="center"><a href="crearCookie.php?idioma=es"><img src="images/spain.png" width="90" height="60"></td></a>
            <td align="center"><a href="crearCookie.php?idioma=in"> <img src="images/england.png" width="90" height="60"></td></a>
        </tr>
    </table>




</body>

</html>