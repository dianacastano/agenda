<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h2 class="text-center mb-4">Registro de Usuarios en Base De Datos</h2>
            <form method="POST" action="../controlador/contactos_controlador.php">
                <input type="hidden" name="accion" value="insertar">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                    
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                    
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    
                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram" class="form-control" required>
                    
                    <label for="tiktok">Tiktok:</label>
                    <input type="text" id="tiktok" name="tiktok" class="form-control" required>
                    
                    <label for="domicilio">Domicilio:</label>
                    <input type="text" id="domicilio" name="domicilio" class="form-control" required>
                    
                    <label for="poblacion">Población:</label>
                    <input type="text" id="poblacion" name="poblacion" class="form-control" required>
                    
                    <label for="provincia">Provincia:</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" required>
                    
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Registrar</button>
            </form>
        </div>
    </div>
</body>

</html>


