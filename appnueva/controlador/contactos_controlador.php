<?php
// Incluir el archivo de configuración
require_once __DIR__ . '/../config.php';

// Incluir el modelo de contactos
require_once MODEL_PATH . 'contactos_modelo.php';

// Función para manejar las acciones relacionadas con contactos
function acciones_contactos($accion)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];

            // Ejecutar las acciones según corresponda
            switch ($accion) {
                case 'insertar':
                    insertar_contacto(
                        $_POST['nombre'],
                        $_POST['apellidos'],
                        $_POST['telefono'],
                        $_POST['email'],
                        $_POST['instagram'],
                        $_POST['tiktok'],
                        $_POST['domicilio'],
                        $_POST['poblacion'],
                        $_POST['provincia'],
                        $_POST['pais']
                    );
                    // Después de insertar, listar contactos
                    listar_contactos();
                    break;
                case 'actualizar':
                    actualizar_contacto(
                        $_POST['id_contacto'],
                        $_POST['nombre'],
                        $_POST['apellidos'],
                        $_POST['telefono'],
                        $_POST['email'],
                        $_POST['instagram'],
                        $_POST['tiktok'],
                        $_POST['domicilio'],
                        $_POST['poblacion'],
                        $_POST['provincia'],
                        $_POST['pais']
                    );
                    // Después de actualizar, listar contactos
                    listar_contactos();
                    break;
                case 'eliminar':
                    eliminar_contacto(
                        $_POST['id_contacto'],
                        0 
                    );
                    // Después de actualizar el estado, listar contactos
                    listar_contactos();
                    break;
                default:
                    // Manejar caso no esperado
                    echo "Acción no esperada.";
                    break;
            }
        }
    }
}


// Ejecutar manejo de contactos
if (isset($_REQUEST['accion'])) {
    $accion = $_REQUEST['accion'];
    acciones_contactos($accion);
} elseif (isset($_GET['id_contacto'])) {
    // Obtener contacto por ID si se proporciona el parámetro 'id' en la URL
    $id_contacto = $_GET['id_contacto'];
    $contacto = obtener_por_id($id_contacto);

    if ($contacto) {
        listar_contactos_id($id_contacto);
    } else {
        // Manejar el caso donde no se encontró el contacto
        echo "No se encontró ningún contacto con el ID proporcionado.";
    }
} else {
    // Si no se proporciona ninguna acción ni ID, listar contactos por defecto
    listar_contactos();
}

?>
