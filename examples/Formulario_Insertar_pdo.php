<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 300px;
            margin: auto;
            background-color: #FFC;
            border: 2px solid #f00;
            padding: 5px;
        }

        td {
            text-align: center;
        }
    </style>


</head>

<body>

    <form action="pagina_insertar_pdo.php" method="post">
        <table>
            <tr>
                <td>Seccion: </td>
                <td><input type="text" name="seccion_art"></td>
            </tr>
            <tr>
                <td>Pais origen:</td>
                <td><input type="text" name="pais_art"></td>
            </tr>
            <tr>
                <td>Nombre del articulo: </td>
                <td><input type="text" name="nombre_art"></td>
            </tr>
            <tr>
                <td>Fecha: </td>
                <td><input type="text" name="fecha_art"></td>
            </tr>
            <tr>
                <td>Precio </td>
                <td><input type="text" name="precio_art"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviando" value="Insertar!">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>