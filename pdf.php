<?php 
ob_start();
include('vendor/autoload.php');
?>
<h1>PDF to Download</h1>
<p> my name is <p> <?php $uname?>I certified this.<br/>
<?php
$body=ob_get_clean();
$body=iconv("UTF-8","UTF-8//IGNORE",$body);
$mpdf=new \Mpdf\Mpdf();

$mpdf->WriteHTML($body);
$mpdf->Output();
?>