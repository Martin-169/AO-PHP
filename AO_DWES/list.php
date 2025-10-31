<?php
require 'utils.php';

echo "=============================\n";
echo "      LISTAR TAREAS\n";
echo "=============================\n\n";

$tareas = cargarTareas();

if (empty($tareas)) {
    echo "No hay tareas registradas todavía.\n";
    exit;
}

echo "¿Quieres ver solo las completadas? (1 = No, 2 = Sí): ";
$opcion = trim(fgets(STDIN));

$soloCompletadas = ($opcion === '2');

echo "\nListado de tareas:\n";
echo "-------------------\n";

$encontradas = 0;

foreach ($tareas as $t) {

    $valorCompleto = false;
    if (isset($t['completed'])) {
  
        if ($t['completed'] === true || $t['completed'] === 1 || $t['completed'] === "1" || $t['completed'] === "true") {
            $valorCompleto = true;
        }
    }

    $id = $t['id'] ?? 'N/A';
    $titulo = $t['title'] ?? '';
    $descripcion = $t['description'] ?? '';
    $fecha = $t['due_date'] ?? '';
    $estadoTexto = $valorCompleto ? "Completada" : "Pendiente";

    if ($soloCompletadas && !$valorCompleto) continue;

    echo "[{$id}] {$titulo}\n";
    echo "   Descripción: {$descripcion}\n";
    echo "   Fecha: {$fecha}\n";
    echo "   Estado: {$estadoTexto}\n\n";

    $encontradas++;
}

if ($encontradas === 0) {
    echo "No hay tareas que coincidan con el filtro.\n";
}

mostrarTareasGuardadas();