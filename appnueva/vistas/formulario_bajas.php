<?php
require_once __DIR__ . '/../config.php';
require_once MODEL_PATH . 'contactos_modelo.php';

// Definir la variable $contacto inicialmente como vacía
$contacto = [];

// Verificar si se ha recibido un id_contacto válido
if (isset($_GET['id_contacto'])) {
    $id_contacto = $_GET['id_contacto'];
    $contacto = consulta_contacto($id_contacto);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dar de Baja Contacto</title>
    <!-- Agrega enlaces a tus archivos de estilos CSS aquí si es necesario -->
    <link rel="stylesheet" href="ruta/a/tu/estilo.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h1>Dar de Baja Contacto</h1>
            <!-- Comprueba si $contacto está definido y no está vacío -->
            <?php if ($contacto && !empty($contacto)): ?>
            <form action="../controlador/contactos_controlador.php" method="post">
                <input type="hidden" name="action" value="desactivar">
                <input type="hidden" name="id_contacto" value="<?php echo htmlspecialchars($contacto['id_contacto']); ?>">
                <p>¿Estás seguro de que quieres dar de baja a este contacto?</p>
                <p><strong>Nombre: </strong><?php echo htmlspecialchars($contacto['nombre']); ?></p>
                <p><strong>Apellidos: </strong><?php echo htmlspecialchars($contacto['apellidos']); ?></p>
                <button type="submit" class="btn btn-danger btn-block">Dar de Baja</button>
            </form>
            <?php else: ?>
                <p>El contacto no fue encontrado o no se especificó un contacto válido.</p>
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
    <!-- Agrega enlaces a tus archivos de scripts JavaScript aquí si es necesario -->
    <script src="ruta/a/tu/script.js"></script>
</body>
</html>





