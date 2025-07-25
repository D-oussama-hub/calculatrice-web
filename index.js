// Expression mathématique actuelle
let expression = "";

// Affiche une valeur (chiffre ou opérateur)
function affval(val) {
    const display = document.getElementById("display");

    // Si l'affichage est "0", on remplace par le premier chiffre
    if (display.textContent === "0" && !isNaN(val)) {
        expression = val;
    } else {
        expression += val;
    }

    display.textContent = expression;
}

// Calcule l'expression actuelle
function calc() {
    const display = document.getElementById("display");

    try {
        // ⚠️ Utilise Function() au lieu de eval() (un peu plus sûr)
        const result = Function('"use strict"; return (' + expression + ')')();
        display.textContent = result;
        expression = result.toString(); // Permet de continuer à calculer ensuite
    } catch (error) {
        display.textContent = "Erreur";
        expression = "";
    }
}

// Réinitialise l'affichage
function reset() {
    expression = "";
    document.getElementById("display").textContent = "0";
}
