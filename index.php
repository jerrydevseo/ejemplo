<?php

// PHP podemos generar HTML
// el HTML es interpretado por el navegador
echo 'hola mundo<br>';

for ($i=1; $i<=10; ++$i) {
    echo $i . '<br>';
}

/*
PHP

$empleados = Empleado::get();

foreach ($empleados as $empleado) {
    echo 'Nombre: ' . $empleado->nombre;
    echo 'Apellido: ' . $empleado->apellido;
}

*/

// JS: empleado.nombre

/*
<button style="background: blue; border-radius: 8px;">Guardar</button>

<button class="btn btn-primary">Guardar</button>
btn-primary --> azul ->
btn-danger  --> rojo ->



sb-admin-2.css <-- de desarrollo
sb-admin-2.min.css <-- de producción (minificado)

--

Webpack

Entrada
- archivo1.js
- archivo2.js
- archivo3.js

Salida
- archivo.min.js

*/