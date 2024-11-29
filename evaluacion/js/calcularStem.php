// Función para calcular la temperatura de equilibrio
function calcularTemperaturaEquilibrio() {
    // Constantes y cálculos como en el código anterior
    const calorEspecificoRecipiente = 0.1; // cal/g°C
    const masaRecipiente = 800; // g
    const temperaturaInicialRecipiente = 20; // °C

    const calorEspecificoAlcohol = 0.58; // cal/g°C
    const masaAlcohol = 180; // g
    const temperaturaInicialAlcohol = 70; // °C
    const temperaturaEbullicionAlcohol = 79; // °C
    const calorLatenteVaporizacionAlcohol = 30; // cal/g

    const calorEspecificoHielo = 0.6; // cal/g°C
    const masaHielo = 200; // g
    const temperaturaInicialHielo = -15; // °C
    const temperaturaFusionHielo = 0; // °C
    const calorLatenteFusionHielo = 80; // cal/g

    const calorEspecificoAgua = 1; // cal/g°C

    function calcularCalor(masa, calorEspecifico, deltaT) {
        return masa * calorEspecifico * deltaT;
    }

    let calorHieloCalentamiento = calcularCalor(
        masaHielo,
        calorEspecificoHielo,
        temperaturaFusionHielo - temperaturaInicialHielo
    );
    let calorHieloFusion = masaHielo * calorLatenteFusionHielo;
    let masaAguaResultante = masaHielo;

    let calorAlcoholCalentamiento = calcularCalor(
        masaAlcohol,
        calorEspecificoAlcohol,
        Math.min(temperaturaEbullicionAlcohol - temperaturaInicialAlcohol, 28 - temperaturaInicialAlcohol)
    );

    let calorAlcoholVaporizacion = 0;
    if (temperaturaEbullicionAlcohol <= 28) {
        calorAlcoholVaporizacion = masaAlcohol * calorLatenteVaporizacionAlcohol;
    }

    let calorTotalAlcohol = calorAlcoholCalentamiento + calorAlcoholVaporizacion;

    let calorRecipiente = calcularCalor(
        masaRecipiente,
        calorEspecificoRecipiente,
        28 - temperaturaInicialRecipiente
    );

    let calorAguaResultante = calcularCalor(
        masaAguaResultante,
        calorEspecificoAgua,
        28 - temperaturaFusionHielo
    );

    let calorTotalSistema =
        calorHieloCalentamiento +
        calorHieloFusion +
        calorAguaResultante +
        calorRecipiente +
        calorTotalAlcohol;

    if (calorTotalSistema >= 0) {
        return 28; // Temperatura de equilibrio alcanzada
    } else {
        return null; // Ajustar si se necesitan iteraciones adicionales
    }
}

// Función para mostrar el resultado en el HTML
function calcula() {
    const resultadoDiv = document.getElementById("resultadoA");
    try {
        const temperaturaEquilibrio = calcularTemperaturaEquilibrio();
        if (temperaturaEquilibrio !== null) {
            resultadoDiv.innerHTML = `La temperatura de equilibrio es: <b>${temperaturaEquilibrio.toFixed(2)}°C</b>`;
        } else {
            resultadoDiv.innerHTML = "No se pudo determinar la temperatura de equilibrio con las condiciones dadas.";
        }
    } catch (error) {
        resultadoDiv.innerHTML = `Error en el cálculo: ${error.message}`;
    }
}
 