<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230408/pngtree-rainbow-curves-abstract-colorful-background-image_2164067.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
        
        .card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            color: white;
        }
        
        h2 {
            background-color: transparent;
            color: white;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            color: black;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 1);
            color: black;
        }

        .btn-block {
            background-color: #28a745;
            border: none;
        }
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
                    
                    <div class="form-group form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="activo" name="activo">
                        <label class="form-check-label" for="activo">Activo</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Registrar</button>
            </form>
        </div>
    </div>
</body>

</html>




