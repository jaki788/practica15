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
                <h2>Problema: Fuerzas en equilibrio</h2>
                <p>Descripción:</p>
                <p>
                    ¿A qué distancia de la Tierra debe estar un cuerpo para que
                    sienta un equilibrio entre las fuerzas gravitacionales que
                    ejercen sobre él el Sol y la Tierra? La distancia media de Sol a
                    la Tierra es de 1·5 ×10E8 km y la masa del Sol es 332 946
                    masas terrestres.
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/esquema.jpeg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <img class="imgProblema" src="images/1.png" alt="Fórmulas del problema">
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <p>Distancia Tierra-Sol (Dt-s) = 1.5 × 10<sup>8</sup> km</p>
                <p>Masa del Sol (Ms) = 332 946 masas terrestres</p>
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
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcular'])) {
                    // Constantes
                    $Dt_s = 1.5e8; // Distancia Tierra-Sol en km
                    $Ms_Mt = 332946; // Relación de masa Sol / masa Tierra

                    // Coeficientes de la ecuación cuadrática
                    $a = $Ms_Mt - 1;
                    $b = -2 * $Dt_s * $Ms_Mt;
                    $c = pow($Dt_s, 2) * $Ms_Mt;

                    // Discriminante
                    $discriminante = pow($b, 2) - 4 * $a * $c;

                    if ($discriminante < 0) {
                        echo "<p>Error: No hay soluciones reales.</p>";
                    } else {
                        // Soluciones de la ecuación cuadrática
                        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
                        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);

                        // Seleccionar la solución positiva (física)
                        $r2 = $solucion1 > 0 ? $solucion1 : $solucion2;

                        if ($r2 > 0) {
                            echo "<p>El valor de r<sub>2</sub> es: " . number_format($r2, 2) . " km</p>";
                        } else {
                            echo "<p>Error: No hay soluciones físicas.</p>";
                        }
                    }
                }
                ?>
            </section>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
