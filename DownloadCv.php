<?php 

require 'dompdf/vendor/autoload.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;


$mybody;
// instantiate and use the dompdf class
$dompdf = new Dompdf();

ob_start();
     require 'index.php';
     $mybody=ob_get_contents();

     ob_clean();
    $dompdf->loadHtml($mybody);
    $dompdf->setPaper('A4', 'landscape');

     // Render the HTML as PDF
       $dompdf->render();
      $dompdf->stream();


?>