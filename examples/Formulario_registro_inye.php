<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>



    <h1> Registro </h1>

    <form name="form1" method="get" action="insertar_registro_inye.php">
        <table border="0" align="center">
            <tr>
                <td>Enter name</td>
                <td><label for="name"></label>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>Enter password</td>
                <td><label for="password"></label>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
            <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>


</body>

</html>