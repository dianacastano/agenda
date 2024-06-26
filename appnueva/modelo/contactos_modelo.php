<?php
// modelo/contacto_modelo.php

require_once __DIR__ . '/../config.php';

//funcion alta
function insertar_contacto($nombre, $apellidos, $telefono, $mail, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $activo) {
    try {
        $pdo = conectarBD();
        $sql = "INSERT INTO contactos (nombre, apellidos, telefono, mail, instagram, tiktok, domicilio, poblacion, provincia, pais, activo) 
                VALUES (:nombre, :apellidos, :telefono, :mail, :instagram, :tiktok, :domicilio, :poblacion, :provincia, :pais, :activo)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':apellidos' => $apellidos,
            ':telefono' => $telefono,
            ':mail' => $mail,
            ':instagram' => $instagram,
            ':tiktok' => $tiktok,
            ':domicilio' => $domicilio,
            ':poblacion' => $poblacion,
            ':provincia' => $provincia,
            ':pais' => $pais,
            ':activo' => $activo,
        ]);
        return true;
    } catch (PDOException $e) {
        echo "Error al insertar contacto: " . $e->getMessage();
        return false;
    }
}

//funcion baja o desactivar
function desactivar_contacto($id_contacto) {
    try {
        $pdo = conectarBD();
        $sql = "UPDATE contactos SET activo = 0 WHERE id_contacto = :id_contacto";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id_contacto' => $id_contacto]);
        return true;
    } catch (PDOException $e) {
        echo "Error al desactivar contacto: " . $e->getMessage();
        return false;
    }
}

//funcion modificar

function modificar_contacto($id_contacto, $nombre, $apellidos, $telefono, $mail, $instagram, $tiktok, $domicilio, $poblacion, $provincia, $pais, $activo) {
    try {
        $pdo = conectarBD();
        $sql = "UPDATE contactos 
                SET nombre = :nombre, apellidos = :apellidos, telefono = :telefono, mail = :mail, instagram = :instagram, tiktok = :tiktok, 
                    domicilio = :domicilio, poblacion = :poblacion, provincia = :provincia, pais = :pais, activo = :activo 
                WHERE id_contacto = :id_contacto";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id_contacto' => $id_contacto,
            ':nombre' => $nombre,
            ':apellidos' => $apellidos,
            ':telefono' => $telefono,
            ':mail' => $mail,
            ':instagram' => $instagram,
            ':tiktok' => $tiktok,
            ':domicilio' => $domicilio,
            ':poblacion' => $poblacion,
            ':provincia' => $provincia,
            ':pais' => $pais,
            ':activo' => $activo,
        ]);
        return true;
    } catch (PDOException $e) {
        echo "Error al modificar contacto: " . $e->getMessage();
        return false;
    }
}

//funcion listar
function listar_contactos() {
    try {
        $pdo = conectarBD();
        $sql = "SELECT * FROM contactos WHERE activo = 1";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error al listar contactos: " . $e->getMessage();
        return false;
    }
}

// consultas
function consulta_contacto($id_contacto) {
    try {
        $pdo = conectarBD();
        $sql = "SELECT * FROM contactos WHERE id_contacto = :id_contacto";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id_contacto' => $id_contacto]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error al consultar contacto: " . $e->getMessage();
        return false;
    }
}
?>