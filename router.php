<?php
// router.php

// Lista de secciones permitidas
$allowedSections = ['dashboard', 'notifications', 'audiencia', 'configuracion'];

// Obtener el parámetro 'section' de la URL (por defecto es 'dashboard')
$section = isset($_GET['section']) ? $_GET['section'] : 'dashboard';

// Verificar si la sección solicitada está permitida
if (in_array($section, $allowedSections)) {
    include "views/$section.php"; // Cargar la vista correspondiente
} else {
    include "views/404.php"; // Cargar la página de error 404
}
?>