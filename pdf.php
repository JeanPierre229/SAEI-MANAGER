<?php
    require 'html2pdf/src/Html2Pdf.php';
    require 'vendor/spipu/html2pdf/html2pdf.class.php';
    require 'vendor/autoload.php';
    use \Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
    $html2pdf->output();
?>
<!-- Lien de création de pdf avec Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
