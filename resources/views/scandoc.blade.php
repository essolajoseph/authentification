<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            text-align: center;
        }

        #reader {
            width: 500px;
        }

        .result {
            background-color: green;
            color: #fff;
            padding: 20px;
        }

        .row {
            display: flex;
        }

        #reader__scan_region {
            background: white;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h1>QR Code Reader using Javascript</h1>

    <!-- QR SCANNER CODE BELOW  -->
    <div class="row">
        <div class="col">
            <div id="reader"></div>
        </div>
        <div class="col" style="padding: 30px">
            <h4>Scan Result </h4>
            <div id="result">
                Result goes here
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        // When scan is successful fucntion will produce data
function onScanSuccess(qrCodeMessage) {
  document.getElementById("result").innerHTML =
    '<span class="result">' + qrCodeMessage + "</span>";
}

// When scan is unsuccessful fucntion will produce error message
function onScanError(errorMessage) {
  // Handle Scan Error
}

// Setting up Qr Scanner properties
var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
  fps: 10,
  qrbox: 250
});

// in
html5QrCodeScanner.render(onScanSuccess, onScanError);
    </script>
</body>

</html>