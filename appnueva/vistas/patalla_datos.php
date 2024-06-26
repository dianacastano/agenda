<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Contacto</title>
    
</head>
<body>
    <header>
        <h1>Datos del Contacto</h1>
    </header>
    <main>
        <h2>Detalles del Contacto</h2>
        <p>Nombre: <?php echo $contacto['nombre']; ?></p>
        <p>Apellidos: <?php echo $contacto['apellidos']; ?></p>
        <p>Teléfono: <?php echo $contacto['telefono']; ?></p>
        <p>Email: <?php echo $contacto['mail']; ?></p>
        <p>Instagram: <?php echo $contacto['instagram']; ?></p>
        <p>TikTok: <?php echo $contacto['tiktok']; ?></p>
        <p>Domicilio: <?php echo $contacto['domicilio']; ?></p>
        <p>Población: <?php echo $contacto['poblacion']; ?></p>
        <p>Provincia: <?php echo $contacto['provincia']; ?></p>
        <p>País: <?php echo $contacto['pais']; ?></p>
        <p>Activo: <?php echo $contacto['activo'] ? 'Sí' : 'No'; ?></p>
        <a href="../controlador/contactos_controlador.php" class="boton">Volver al Listado</a>
    </main>
</body>
</html>




