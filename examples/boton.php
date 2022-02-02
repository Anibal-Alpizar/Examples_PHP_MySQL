<form name="form" action="">
    <input type="text" name="nombre" />
    <input type="submit" name="enviar" />
</form>

<?php
if (isset($_REQUEST['enviar'])) {
    echo "se pincho en el boton";
}
?>