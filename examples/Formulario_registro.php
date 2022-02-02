<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1> Registro de articulos </h1>

    <form name="form1" method="get" action="insertar_registro.php">
        <table border="0" align="center">
            <tr>
                <td>Seccion articulo</td>
                <td><label for="c_art"></label>
                    <input type="text" name="s_art" id="c_art">
                </td>
            </tr>
            <tr>
                <td>Nombre articulo</td>
                <td><label for="c_art"></label>
                    <input type="text" name="n_art" id="c_art">
                </td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><label for="c_art"></label>
                    <input type="text" name="fecha" id="fecha">
                </td>
            </tr>
            <tr>
                <td>Pais de origen</td>
                <td><label for="c_art"></label>
                    <input type="text" name="p_art" id="c_art">
                </td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><label for="c_art"></label>
                    <input type="text" name="precio" id="precio">
                </td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>


</body>

</html>