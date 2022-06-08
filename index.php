<?php
    include('./qr.php');
    $qrCode = QR::generate($_GET["content"], 7); //generate(qrCodeValue, qrCodeSize) => returns a base64 code
    echo "<img src='data:image/png;base64, $qrCode' />";
?>