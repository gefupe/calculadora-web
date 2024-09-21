<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

    // Variable para almacenar el resultado
    $resultado = '';

    // Realizar la operación correspondiente
    switch ($operacion) {
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            break;
        default:
            $resultado = 'Operación no válida';
    }

    // Devolver el resultado como respuesta en formato JSON
    echo json_encode(['resultado' => $resultado]);
}
?>
