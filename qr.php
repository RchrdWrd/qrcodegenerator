<?php 
  /*
  FileName: qr.php
  Author: John Richard Ward Daily
  Function: A class to generate png qrCode with base64 encoding returns
  */
  include('./lib/phpqrcode/qrlib.php');
  class QR {
    static function generate($value, $size) {
      if(strlen($value) > 0) {
        $qrCode = null;
        ob_start();
        QRcode::png($value, null, QR_ECLEVEL_L, $size, 0);
        $qrCode = base64_encode(ob_get_contents());
        ob_end_clean();
        return $qrCode;
      }
    }
  }
?>