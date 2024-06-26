<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consultar Contacto</title>
    
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h1>Consultar Contacto</h1>
            <form action="../controlador/contactos_controlador.php" method="post">
                <input type="hidden" name="action" value="consulta">
                <input type="hidden" name="id_contacto" value="<?php echo htmlspecialchars($contacto['id_contacto']); ?>">
                <div class="form-group">
                    <label>Nombre:</label>
                    <p><?php echo htmlspecialchars($contacto['nombre']); ?></p>
                </div>
                <div class="form-group">
                    <label>Apellidos:</label>
                    <p><?php echo htmlspecialchars($contacto['apellidos']); ?></p>
                </div>
                <div class="form-group">
                    <label>Teléfono:</label>
                    <p><?php echo htmlspecialchars($contacto['telefono']); ?></p>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <p><?php echo htmlspecialchars($contacto['mail']); ?></p>
                </div>
                <div class="form-group">
                    <label>Instagram:</label>
                    <p><?php echo htmlspecialchars($contacto['instagram']); ?></p>
                </div>
                <div class="form-group">
                    <label>TikTok:</label>
                    <p><?php echo htmlspecialchars($contacto['tiktok']); ?></p>
                </div>
                <div class="form-group">
                    <label>Domicilio:</label>
                    <p><?php echo htmlspecialchars($contacto['domicilio']); ?></p>
                </div>
                <div class="form-group">
                    <label>Población:</label>
                    <p><?php echo htmlspecialchars($contacto['poblacion']); ?></p>
                </div>
                <div class="form-group">
                    <label>Provincia:</label>
                    <p><?php echo htmlspecialchars($contacto['provincia']); ?></p>
                </div>
                <div class="form-group">
                    <label>País:</label>
                    <p><?php echo htmlspecialchars($contacto['pais']); ?></p>
                </div>
                <div class="form-group">
                    <label>Activo:</label>
                    <p><?php echo $contacto['activo'] ? 'Sí' : 'No'; ?></p>
                </div>
                <div class="col text-right">
                    <a href="../vistas/pantalla_listar.php" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                            <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                            <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                        </svg> Listar
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



