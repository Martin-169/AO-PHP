<?php
require 'utils.php';

echo "=============================\n";
echo "      EDITAR TAREA\n";
echo "=============================\n\n";

$id = pedirDato("Introduce el ID de la tarea a editar: ");
$tareas = cargarTareas();
$indice = buscarTarea($tareas, $id);

if ($indice === -1) {
    echo "No existe una tarea con ese ID.\n";
    exit;
}

$tarea = $tareas[$indice];
echo "Deja en blanco para mantener el valor actual.\n\n";

$nuevoTitulo = pedirDato("Nuevo título ({$tarea['title']}): ");
$nuevaDesc = pedirDato("Nueva descripción ({$tarea['description']}): ");
$nuevaFecha = pedirDato("Nueva fecha ({$tarea['due_date']}): ");
$nuevoEstadoNum = pedirDato("¿Está completada? (1 = No, 2 = Sí) [actual: " . ($tarea['completed'] ? "Sí" : "No") . "]: ");
$nuevoEstado = $nuevoEstadoNum ? convertirAEstado($nuevoEstadoNum) : $tarea['completed'];

$tareas[$indice]['title'] = $nuevoTitulo ?: $tarea['title'];
$tareas[$indice]['description'] = $nuevaDesc ?: $tarea['description'];
$tareas[$indice]['due_date'] = $nuevaFecha ?: $tarea['due_date'];
$tareas[$indice]['completed'] = $nuevoEstado;

guardarTareas($tareas);

echo "\nTarea editada correctamente.\n";
mostrarTareasGuardadas();