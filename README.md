# QRCode Generator written in PHP

# USAGE
 first include qr.php to your PHP file
 
 <sub> include('./qr.php'); </sub>
 
 ..and u can store a base64 qrcode png in a variable:
 generate(value(string), size(int))
 <sub> $qrCode = QR::generate($_GET["content"], 7); </sub>
