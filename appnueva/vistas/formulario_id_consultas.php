<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Contacto</title>
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

        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h2 class="text-center mb-4">Consultar Contacto</h2>

            <form action="../controlador/contactos_controlador.php" method="post" class="text-center">
                <input type="hidden" name="accion" value="consultar">
                <div class="form-group">
                    <label for="id_contacto">ID del Contacto:</label>
                    <input type="text" class="form-control" id="id_contacto" name="id_contacto" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Buscar Contacto</button>
            </form>

            <div class="text-right mt-3">
                <a href="index.php" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                        <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                        <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                    </svg> Menú Principal
                </a>
            </div>
        </div>
    </div>
</body>

</html>





