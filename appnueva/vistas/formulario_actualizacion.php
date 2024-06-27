<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualizar Contacto</title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230408/pngtree-rainbow-curves-abstract-colorful-background-image_2164067.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: #fff;
}

.container-sm {
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
}

h2 {
    color: #fff;
    background-color: rgba(128, 0, 128, 0.5); 
    padding: 10px;
    border-radius: 10px;
}

.form-group label {
    font-weight: bold;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-danger {
    background-color: #ff5733;
    border-color: #ff5733;
}

.btn-danger:hover {
    background-color: #c70039;
    border-color: #c70039;
}
</style>
</head>

<body>
    <div class="container-sm mt-5">
        <h2 class="text-center">Modificar Contacto</h2>

        <?php
        // Verificar si se ha enviado un formulario de actualización
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['accion']) && $_POST['accion'] === 'actualizar') {
            // Recibir y procesar los datos del formulario
            $id_contacto = $_POST['id_contacto'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $instagram = $_POST['instagram'];
            $tiktok = $_POST['tiktok'];
            $domicilio = $_POST['domicilio'];
            $poblacion = $_POST['poblacion'];
            $provincia = $_POST['provincia'];
            $pais = $_POST['pais'];

            // Mostrar mensaje de éxito
            echo '<div class="alert alert-success" role="alert">Los datos del contacto han sido actualizados correctamente.</div>';
        }
        ?>

        <form method="POST" action="../controlador/contactos_controlador.php">
            <input type="hidden" name="accion" value="actualizar">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="id_contacto">ID:</label>
                    <input type="text" class="form-control" name="id_contacto" value="<?php echo isset($id_contacto) ? $id_contacto : ''; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="form-group col-md-6">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="instagram">Instagram:</label>
                    <input type="text" class="form-control" id="instagram" name="instagram">
                </div>

                <div class="form-group col-md-6">
                    <label for="tiktok">TikTok:</label>
                    <input type="text" class="form-control" id="tiktok" name="tiktok">
                </div>
            </div>

            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="poblacion">Población:</label>
                    <input type="text" class="form-control" id="poblacion" name="poblacion">
                </div>

                <div class="form-group col-md-6">
                    <label for="provincia">Provincia:</label>
                    <input type="text" class="form-control" id="provincia" name="provincia">
                </div>
            </div>

            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>

            <button type="submit" class="btn btn-success">Actualizar Contacto</button>
        </form>

        <div class="text-right mt-3">
            <a href="../index.php" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                </svg> Volver al Menú Principal
            </a>
        </div>
    </div>
</body>

</html>




