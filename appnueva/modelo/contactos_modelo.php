<?php

require_once __DIR__ . '/../config.php';

function obtener_por_id($id_contacto){
    $pdo = conectarBD();
    
    try {
        $stmt = $pdo->prepare("SELECT nombre, apellidos, telefono, email, instagram, tiktok, domicilio, poblacion, provincia, pais FROM contactos WHERE id_contacto = ?");
        $stmt->execute([$id_contacto]);
        $contacto = $stmt->fetch(PDO::FETCH_ASSOC);
        return $contacto ? $contacto : false;
    } catch (PDOException $e) {
        error_log('Error en la consulta obtener_contacto_por_id: ' . $e->getMessage());
        return false;
    }
}

// Función para obtener todos los contactos
function obtener_contactos() {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("SELECT * FROM contactos WHERE activo = 1");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function listar_contactos() {
    $contactos = obtener_contactos();
    require VIEW_PATH . '../vistas/pantalla_listar.php';
}

function listar_contactos_id($id_contacto) {
    $contactos = obtener_por_id($id_contacto);
    require VIEW_PATH . '../vistas/patalla_datos.php';
}
// Función para insertar un nuevo contacto
function insertar_contacto($nombre, $apellidos, $telefono, $email, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais) {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("INSERT INTO contactos (nombre, apellidos, telefono, email, instagram, tiktok, domicilio, poblacion, provincia, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $apellidos, $telefono, $email, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais]);
    return $pdo->lastInsertId();
}

// Función para actualizar 
function actualizar_contacto($id_contacto, $nombre, $apellidos, $telefono, $email, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais) {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("UPDATE contactos SET nombre=?, apellidos=?, telefono=?, email=?, instagram=?, tiktok=?, domicilio=?, poblacion=?, provincia=?, pais=? WHERE id_contacto=?");
    $stmt->execute([$nombre, $apellidos, $telefono, $email, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $id_contacto]);
}

// Función para eliminar un contacto
function eliminar_contacto($id_contacto, $activo) {
    $pdo = conectarBD();

    try {
        $stmt = $pdo->prepare("UPDATE contactos SET activo = ? WHERE id_contacto = ?");
        $stmt->execute([$activo, $id_contacto]);
    } catch (PDOException $e) {
        die("Error al actualizar el estado del contacto: " . $e->getMessage());
    }
}

?>