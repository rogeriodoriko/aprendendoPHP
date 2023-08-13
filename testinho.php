
<html>
  <head>
    <title>Gerador de QR Code</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="icon" type="image/png" href="qr-code.png" />
  </head>
   <body>
    <div class="container">
      <img src="ass borda preta.png" />
      <h1>Gerador de QR Code do doriko</h1>
      <input type="text" id="inputData" placeholder="Digite o texto ou link" />
      <button onclick="generateQRCode()">Gerar QR Code</button>
      <div id="qrcode"></div>
    </div>
    <script src="script.js"></script>
    <script src="qrcode.min.js"></script>
  </body>
</html>
