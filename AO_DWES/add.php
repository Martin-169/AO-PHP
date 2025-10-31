<?php
require 'utils.php';

echo "=============================\n";
echo "      AÑADIR NUEVA TAREA\n";
echo "=============================\n\n";

$titulo = pedirDato("Título: ");
$descripcion = pedirDato("Descripción: ");
$fecha = pedirDato("Fecha de vencimiento (YYYY-MM-DD): ");
$completadaNum = pedirDato("¿Está completada? (1 = No, 2 = Sí): ");
$completada = convertirAEstado($completadaNum);

$tareas = cargarTareas();
$nuevoId = siguienteId($tareas);

$nuevaTarea = [
    'Id' => $nuevoId,
    'Título' => $titulo,
    'Descripción' => $descripcion,
    'Fecha' => $fecha,
    'Completado' => $completada
];

$tareas[] = $nuevaTarea;
guardarTareas($tareas);

echo "\nTarea añadida con éxito.\n";
mostrarTareasGuardadas();