<?php
require_once __DIR__ . '/../config.php';
require_once MODEL_PATH . "modelo_agenda.php";

$mensaje = '';

// Verificar si se proporcionó un ID y obtener el contacto correspondiente
if (isset($_GET['id'])) {
    $id_contacto = $_GET['id'];
    // Obtener el contacto por su ID
    $contacto = consulta_contacto($id_contacto);
    
    // Verificar si $contacto es null antes de acceder a sus propiedades
    if (!$contacto) {
        $mensaje = 'El contacto no existe.';
    }

    // Manejar la modificación del contacto si se envió el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        $instagram = $_POST['instagram'];
        $tiktok = $_POST['tiktok'];
        $domicilio = $_POST['domicilio'];
        $poblacion = $_POST['poblacion'];
        $provincia = $_POST['provincia'];
        $pais = $_POST['pais'];
        $activo = isset($_POST['activo']) ? 1 : 0;

        // Modificar el contacto en la base de datos
        $resultado = modificar_contacto($id_contacto, $nombre, $apellidos, $telefono, $mail, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $activo);
        
        if ($resultado) {
            $mensaje = 'Contacto modificado correctamente.';
        } else {
            $mensaje = 'Error al modificar el contacto.';
        }
    }
} else {
    $mensaje = 'No se proporcionó un ID de contacto válido.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Contacto</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h1>Modificar Contacto</h1>
            <?php if ($mensaje): ?>
                <div class="alert alert-info"><?php echo htmlspecialchars($mensaje); ?></div>
            <?php endif; ?>
            <?php if ($contacto): ?>
            <form action="" method="post">
                <input type="hidden" name="action" value="modificar">
                <input type="hidden" name="id_contacto" value="<?php echo htmlspecialchars($contacto['id_contacto']); ?>">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo htmlspecialchars($contacto['nombre']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo htmlspecialchars($contacto['apellidos']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" value="<?php echo htmlspecialchars($contacto['telefono']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="mail">Email:</label>
                    <input type="email" id="mail" name="mail" class="form-control" value="<?php echo htmlspecialchars($contacto['mail']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram" class="form-control" value="<?php echo htmlspecialchars($contacto['instagram']); ?>">
                </div>
                <div class="form-group">
                    <label for="tiktok">TikTok:</label>
                    <input type="text" id="tiktok" name="tiktok" class="form-control" value="<?php echo htmlspecialchars($contacto['tiktok']); ?>">
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control" value="<?php echo htmlspecialchars($contacto['domicilio']); ?>">
                </div>
                <div class="form-group">
                    <label for="poblacion">Población:</label>
                    <input type="text" id="poblacion" name="poblacion" class="form-control" value="<?php echo htmlspecialchars($contacto['poblacion']); ?>">
                </div>
                <div class="form-group">
                    <label for="provincia">Provincia:</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" value="<?php echo htmlspecialchars($contacto['provincia']); ?>">
                </div>
                <div class="form-group">
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" class="form-control" value="<?php echo htmlspecialchars($contacto['pais']); ?>">
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="activo" <?php echo $contacto['activo'] ? 'checked' : ''; ?>> Activo
                    </label>
                </div>
                <button type="submit" class="btn btn-success btn-block">Guardar Cambios</button>
            </form>
            <?php endif; ?>
            <br>
            <div class="col text-right">
                <a href="../vistas/pantalla_listar.php" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                    </svg> Listar
                </a>
            </div>
        </div>
    </div>
</body>
</html>




