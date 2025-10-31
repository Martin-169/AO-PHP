<?php

define('DATA_FILE', __DIR__ . '/data.json');

function pedirDato($mensaje) {
    echo $mensaje;
    return trim(fgets(STDIN));
}

function cargarTareas() {
    if (!file_exists(DATA_FILE)) {
        file_put_contents(DATA_FILE, json_encode(['tasks' => []], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $contenido = file_get_contents(DATA_FILE);
    $datos = json_decode($contenido, true);

    if (!isset($datos['tasks']) || !is_array($datos['tasks'])) {
        $datos = ['tasks' => []];
    }

    return $datos['tasks'];
}

function guardarTareas($tareas) {
    $datos = ['tasks' => array_values($tareas)];
    file_put_contents(DATA_FILE, json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function siguienteId($tareas) {
    $max = 0;
    foreach ($tareas as $t) {
        if (isset($t['id']) && is_numeric($t['id'])) {
            $num = intval($t['id']);
            if ($num > $max) $max = $num;
        }
    }
    return $max + 1;
}

function buscarTarea($tareas, $id) {
    foreach ($tareas as $i => $t) {
        if (isset($t['id']) && intval($t['id']) === intval($id)) {
            return $i;
        }
    }
    return -1;
}

function convertirAEstado($valor) {
    return trim($valor) === '2';
}

function mostrarTareasGuardadas() {
    $tareas = cargarTareas();
    echo "\nTareas guardadas en data.json:\n";
    echo json_encode(['tasks' => $tareas], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n\n";
}