<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$empleados = [
    ['nombre' => 'Juan ',
     'sueldo' => 2500],

    ['nombre' => 'María ',
     'sueldo' => 3000],

    ['nombre' => 'Carlos ',
     'sueldo' => 2800],

    ['nombre' => 'Ana ',
      'sueldo' => 3200],

    ['nombre' => 'Luis ',
     'sueldo' => 2600]
];
array_push($empleados, [
    'nombre' => 'Diego ',
    'sueldo' => 2900
]);

usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

foreach ($empleados as $empleado) {
    echo 'Empleado: ' . $empleado['nombre'] . ' - Sueldo Mensual: $' . $empleado['sueldo'] . "<br>";
}

?>

</body>
</html>