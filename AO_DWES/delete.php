<?php
require 'utils.php';

echo "=============================\n";
echo "      ELIMINAR TAREA\n";
echo "=============================\n\n";

$id = pedirDato("Introduce el ID de la tarea a eliminar: ");
$tareas = cargarTareas();
$indice = buscarTarea($tareas, $id);

if ($indice === -1) {
    echo "No existe una tarea con ese ID.\n";
    exit;
}

$tarea = $tareas[$indice];
echo "Tarea seleccionada: {$tarea['title']} - {$tarea['description']}\n";

$confirmar = pedirDato("¿Seguro que quieres eliminarla? (1 = No, 2 = Sí): ");
if ($confirmar !== '2') {
    echo "Operación cancelada.\n";
    exit;
}

unset($tareas[$indice]);
$tareas = array_values($tareas);
guardarTareas($tareas);

echo "\nTarea eliminada correctamente.\n";
mostrarTareasGuardadas();