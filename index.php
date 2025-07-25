<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculatrice</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="calculator">
    <div class="display" id="display">0</div>
    <button onclick="reset()" id="btn-clear">C</button>
    <div class="buttons">
      <!-- Tous les boutons utilisent 'affval' avec 'this' -->
      <button onclick="affval('7')">7</button>
      <button onclick="affval('8')">8</button>
      <button onclick="affval('9')">9</button>
      <button onclick="affval('/')">/</button>

      <button onclick="affval('4')">4</button>
      <button onclick="affval('5')">5</button>
      <button onclick="affval('6')">6</button>
      <button onclick="affval('*')">*</button>

      <button onclick="affval('1')">1</button>
      <button onclick="affval('2')">2</button>
      <button onclick="affval('3')">3</button>
      <button onclick="affval('-')">-</button>

      <button onclick="affval('0')">0</button>
      <button onclick="affval('.')">.</button>
      <button onclick="calc()" class="btn-equals">=</button>
      <button onclick="affval('+')">+</button>
    </div>
  </div>

  <script src="index.js"></script>
</body>
</html>
