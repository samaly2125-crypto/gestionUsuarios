<?php include("conexion.php"); ?>

<h2>Lista de Usuarios</h2>
<a href="crear.php">Crear Usuario</a>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM usuarios");

while($row = $resultado->fetch_assoc()) {
    echo "<tr>
        <td>{$row['nombre']}</td>
        <td>{$row['cedula']}</td>
        <td>{$row['telefono']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>
</table>