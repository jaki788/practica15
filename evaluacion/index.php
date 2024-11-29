<!DOCTYPE html>
<html lang="es-mx">
<head>
<meta charset="UTF-8">
<title>CiTIM Grupo XB</title>
<link rel="stylesheet" href="css/problemaStem.css"/>

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<script src="js/calcularStem.js"></script>
</head>
<body>
<section class="wrapper">
<header>
<h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
</header>
<section id="contenedor">
<section class="problema">
<h2>Problema: Fuerzas en equilibrio</h2>
<p>Descripción:</p>
<p>
    En un recipiente de 800 gramos, que está a 20°C, se vierten 600 cc de agua a 60°C.
El recipiente tiene un recubrimiento aislante, de manera que pueden despreciarse
los intercambios de calor con el exterior. Cuando se alcanza el equilibrio, la
temperatura del agua es de 28°C.
Una vez que el recipiente vuelve a estar vacío, y a 20°C, se vierten en él 180
gramos de alcohol, de calor específico 0'58 cal/g°C, a 70°C, y 200 gramos de hielo,
de calor específico 0 '60 cal/g°C, a -15°C. La temperatura de ebullición del alcohol
es de 79°C, la de fusión -115°C, y su calor latente defusión 30 cal/g. Para el agua
son, respectivamente, 0°C, 100°C, y 80 cal/g.
Determinar la temperatura de equilibrio del sistema.</p>
</section>
<section class="esquemaProblema">
<h2>Esquema</h2>
<!--Buscar o crear una impagen que represente el problema jpg o png-->
<center>
<img class="imgProblema" src="images/esquema.jpeg">
</center>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<h3>Q = m . Ce . Δt</h3>
<h3>Q = m ⋅ L</h3>
<h3>Q absorbido + Q cedido = 0</h3>
<!--Aqui van las fórmulas a emplear, de preferencia despejar la variable a calcular-->
</section>
<section class="datos">
    <h2>Datos:</h2>
    <ul>
      <li><strong>Masa de agua:</strong> 600 g (equivalente a 600 cc, dado que la densidad del agua es 1 g/cc)</li>
      <li><strong>Temperatura inicial del agua:</strong> 60°C</li>
      <li><strong>Temperatura final del agua (de equilibrio):</strong> 28°C</li>
      <li><strong>Calor específico del agua:</strong> 1 cal/g°C</li>
      <br>
      <li><strong>Masa del recipiente:</strong> 800 g</li>
      <li><strong>Temperatura inicial del recipiente:</strong> 20°C</li>
      <li><strong>Calor específico del recipiente:</strong> 0.1 cal/g°C</li>
      <br>
      <li><strong>Masa de alcohol:</strong> 180 g</li>
      <li><strong>Temperatura inicial del alcohol:</strong> 70°C</li>
      <li><strong>Temperatura de ebullición del alcohol:</strong> 79°C</li>
      <li><strong>Calor específico del alcohol:</strong> 0.58 cal/g°C</li>
      <li><strong>Calor latente de vaporización del alcohol:</strong> 30 cal/g</li>
      <br>
      <li><strong>Masa de hielo:</strong> 200 g</li>
      <li><strong>Temperatura inicial del hielo:</strong> -15°C</li>
      <li><strong>Temperatura de fusión del hielo:</strong> 0°C</li>
      <li><strong>Calor específico del hielo:</strong> 0.6 cal/g°C</li>
      <li><strong>Calor latente de fusión del hielo:</strong> 80 cal/g</li>
    </ul>
  </section>
<section class="calculos">
<h2>Solución</h2>
<img class="" src="images/3.jpeg">
<!--Se sustituyen los valores de los datos en la formula para indicar las operaciones a realizarse. No se procesan, ni se pone el resultado en esta sección-->
<p>
</p>
<!--En el archivo js/calculaStem.js, implementar la función calcular() en JS, para resolver problema, definiendo las variables y obteniendo el resultado de aplicar las formulas y regresar el valor obtenido a la sección de resultado que indique las unidades correspondientes-->
<button onclick="calcula()">Presiona para calcular</button>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
</section>
</section>
<footer class="pie">
Creative Commons versión 3.0 SciSoft 2024
</footer>
</section>
</body>
</html>