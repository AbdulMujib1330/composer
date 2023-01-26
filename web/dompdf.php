<?php 
    require_once './../vendor/autoload.php';

    $faker = Faker\Factory::create();
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    

    $html = "This is Document PDF <h1> THIS IS VERY COOOOLLLLL</h1>";
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
?>
