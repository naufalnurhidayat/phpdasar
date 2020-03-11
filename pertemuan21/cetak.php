<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$animasi = query("SELECT * FROM tb_animasi");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Animasi</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
   <h1>Daftar Animasi</h1>
   <table border="1" cellpadding="10" cellspacing="0">

   <tr>
       <th>No.</th>
       <th>Gambar</th>
       <th>Nama</th>
       <th>Jenis</th>
       <th>Tahun</th>
       <th>Pencipta</th>
   </tr>';

     $i = 1;
     foreach( $animasi as $row ) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $row["gambar"] .'" width="50"></td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["jenis"] .'</td>
            <td>'. $row["tahun"] .'</td>
            <td>'. $row["pencipta"] .'</td>
        </tr>';
     }   

$html .= '</table>    
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-animasi.pdf', 'I');

?>