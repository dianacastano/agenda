<?php
require_once __DIR__ . '/../config.php';
require_once MODEL_PATH . 'contactos_modelo.php';

// Verificar la acción que se está solicitando
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    case 'insertar':
        // Validar y procesar inserción de contacto
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $mail = $_POST['mail'];
            $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : null;
            $tiktok = isset($_POST['tiktok']) ? $_POST['tiktok'] : null;
            $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : null;
            $poblacion = isset($_POST['poblacion']) ? $_POST['poblacion'] : null;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;
            $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
            $activo = isset($_POST['activo']) ? true : false;

            if (insertar_contacto($nombre, $apellidos, $telefono, $mail, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $activo)) {
                header('Location: ../vistas/pantalla_listar.php');
                exit;
            } else {
                echo "Error al insertar el contacto.";
            }
        }
        break;

    case 'modificar':
        // Validar y procesar modificación de contacto
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_contacto = $_POST['id_contacto'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $telefono = $_POST['telefono'];
            $mail = $_POST['mail'];
            $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : null;
            $tiktok = isset($_POST['tiktok']) ? $_POST['tiktok'] : null;
            $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : null;
            $poblacion = isset($_POST['poblacion']) ? $_POST['poblacion'] : null;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : null;
            $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
            $activo = isset($_POST['activo']) ? true : false;

            if (modificar_contacto($id_contacto, $nombre, $apellidos, $telefono, $mail, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $activo)) {
                header('Location: ../vistas/pantalla_listar.php');
                exit;
            } else {
                echo "Error al modificar el contacto.";
            }
        }
        break;

    case 'eliminar':
        // Validar y procesar eliminación de contacto
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_contacto = $_POST['id_contacto'];

            if (desactivar_contacto($id_contacto)) {
                header('Location: ../vistas/pantalla_listar.php');
                exit;
            } else {
                echo "Error al eliminar el contacto.";
            }
        }
        break;

    case 'consultar':
        // Validar y procesar consulta de contacto
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id_contacto = $_GET['id'];
            $contacto = consulta_contacto($id_contacto);

            // Aquí mostramos un ejemplo básico de cómo podrías mostrar los datos del contacto consultado
            if ($contacto) {
                echo "Nombre: " . $contacto['nombre'] . "<br>";
                echo "Apellidos: " . $contacto['apellidos'] . "<br>";
                echo "Teléfono: " . $contacto['telefono'] . "<br>";
                echo "Email: " . $contacto['mail'] . "<br>";
                // Y así sucesivamente con los demás campos
            } else {
                echo "Contacto no encontrado.";
            }
        }
        break;

    case 'listar':
    default:
        // Obtener todos los contactos para listar
        $contactos = listar_contactos();

        // Aquí mostramos un ejemplo básico de cómo podrías mostrar la lista de contactos
        if ($contactos) {
            echo "<h1>Listado de Contactos</h1>";
            foreach ($contactos as $contacto) {
                echo "ID: " . $contacto['id_contacto'] . "<br>";
                echo "Nombre: " . $contacto['nombre'] . "<br>";
                echo "Apellidos: " . $contacto['apellidos'] . "<br>";
                echo "Teléfono: " . $contacto['telefono'] . "<br>";
                echo "Email: " . $contacto['mail'] . "<br>";
                echo "<a href='../vistas/formulario_actualizacion.php?id=" . $contacto['id_contacto'] . "'>Actualizar</a> | ";
                echo "<form action='../controlador/contactos_controlador.php' method='post' style='display: inline;'>";
                echo "<input type='hidden' name='action' value='eliminar'>";
                echo "<input type='hidden' name='id_contacto' value='" . $contacto['id_contacto'] . "'>";
                echo "<button type='submit'>Eliminar</button>";
                echo "</form>";
                echo "<br><br>";
            }
        } else {
            echo "No hay contactos para mostrar.";
        }
        break;
}

?>

