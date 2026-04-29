<?php include("conexion.php");

$id = $_GET['id'];
$usuario = $conexion->query("SELECT * FROM usuarios WHERE id=$id")->fetch_assoc();
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br>
    Cédula: <input type="text" name="cedula" value="<?php echo $usuario['cedula']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>

<?php
if($_POST){
    $conexion->query("UPDATE usuarios SET 
        nombre='{$_POST['nombre']}',
        cedula='{$_POST['cedula']}',
        telefono='{$_POST['telefono']}'
        WHERE id=$id");

    header("Location: index.php");
}
?>