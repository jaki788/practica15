<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: colector solar plano</h2>
                <p>Descripción:</p>
                <p>
                Un colector solar plano que tiene una soperficie de 4 m2 debe calentar agua para uso domestico. Sabiendo que el coeficiente de 
    radiacion solar k=0,9 cal/min.cm2 y que el consumo de agua esconstante, a razon de 6 litros /minutos, determina el aumento 
    de temperatura del agua si esta funcionando duarnte 2 horas. Se supone que inicialmente el agua esta a 18°C y que no hay perdidas de calor
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/e.jpeg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <img class="imgProblema" src="images/11.jpeg" alt="Fórmulas del problema">
            </section>
            <section class="datos">
            <p>Q=Energia generada, K=coeficiente de radiacion</p><br>
        <p>Tiempo, en minutos</p>
        <p>Area, cm2</p>
<p>rendimiento</p>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <form method="POST" action="">
                    <button type="submit" name="calcular">Calcular</button>
                </form>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <?php

             // Datos iniciales
             $k = 0.9; // Coeficiente de radiación solar en cal/min·cm²
             $A = 4; // Área del colector en m²
             $t = 120; // Tiempo de funcionamiento en minutos
             $flow_rate = 6 * 1000; // Flujo de agua en gramos/min (6 litros/min -> 6000 g/min)
             $c = 1; // Calor específico del agua en cal/g·°C
             
             // Conversión de k a cal/min·m²
             $k_m2 = $k * 10000; // 1 m² = 10000 cm²
             
             // Calor absorbido por el colector
             $Q_absorbed = $k_m2 * $A * $t;
             
             // Aumento de temperatura del agua
             $delta_T = $Q_absorbed / ($flow_rate * $t * $c);
             
             // Resultados
             echo "El aumento de temperatura del agua es: " . round($delta_T, 2) . " °C.\n";
?>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
