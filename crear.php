<?php include("conexion.php"); ?>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Cédula: <input type="text" name="cedula"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <button type="submit">Guardar</button>
</form>

<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $conexion->query("INSERT INTO usuarios(nombre, cedula, telefono) 
                      VALUES('$nombre','$cedula','$telefono')");

    header("Location: index.php");
}
?>