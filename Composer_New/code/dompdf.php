<?php
require_once "./../vendor/autoload.php";
// reference the Dompdf namespace
$faker = Faker\Factory::create();
use Dompdf\Dompdf;
$html="
    <table border='solid'>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
    
";
for($i = 1; $i < 11; $i++){
    $html .="<tr>";    
    $html .="<td>" .$i. "</td>";
    $html .="<td>" .$faker->name(). "</td>";
    $html .="<td>" .$faker->email(). "</td>";
    $html .="</tr>";
}
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// $dompdf->loadHtml("
//     <table border='1 px'>
//     <tr>
//     <th>Name</th>
//     <th>Email</th>
//     <th>Name</th>
//     <th>Name</th>
//     <th>Name</th>
//     <th>Name</th>
//     <th>Name</th>
//     <th>Name</th>
//     </tr>
//     </table>
// ");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>