# QRCode Generator
 written in PHP

# USAGE
 first include qr.php to your PHP file => include('./qr.php');
 
 ..and u can store a base64 qrcode png in a variable:
 $qrCode = QR::generate($_GET["content"], 7);
