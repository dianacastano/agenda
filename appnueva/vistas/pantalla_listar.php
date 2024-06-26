<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Contactos</title>
    <style>
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: rgba(255, 255, 255, 0.8);
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center" style="background-color: rgba(0, 0, 0, 0.5); color: white;">Listado de Contactos</h2>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contactos = listar_contactos();
                foreach ($contactos as $contacto) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($contacto['id_contacto']) . "</td>";
                    echo "<td>" . htmlspecialchars($contacto['nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($contacto['apellidos']) . "</td>";
                    echo "<td>" . htmlspecialchars($contacto['telefono']) . "</td>";
                    echo "<td>" . htmlspecialchars($contacto['mail']) . "</td>";
                    echo "<td>";
                    echo "<a class='btn btn-success' href='../controlador/contactos_controlador.php?id=" . urlencode($contacto['id_contacto']) . "'><i class='fas fa-sync-alt'></i> Actualizar</a>";
                    echo "<a class='btn btn-danger ml-1' href='../controlador/contactos_controlador.php?id=" . urlencode($contacto['id_contacto']) . "'><i class='fas fa-trash'></i> Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="col text-right">
            <a href="../index.php" class="btn btn-primary">
                <i class="fas fa-home"></i> Inicio
            </a>
        </div>
    </div>

</body>
</html>







