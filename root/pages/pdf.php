
<?php
<<<<<<< HEAD
// require 'dompdf/vendor/autoload.php';

// reference the Dompdf namespace
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
$html2pdf->output();

// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $dompdf->loadHtml('
// <head>
// <title>menu pdf</title>
// <style>
//     h2 {
    
//         margin: 1px;
//     }

//     h3 {
//         margin-top: 10px;
//         padding: 10px;
//         padding-top: 15px;
//     }
//     h4 {
//         padding-top: 15px;
//         margin: 3px;
//     }
//     h5 {
//         margin: 1px;
//     }
//     body {
//         text-align: center;
//         background-color: antiquewhite;
//     }
//     .a4 {
//         border: 1px;
//         background-color: rgb(255, 255, 255);
//         height: 29.7cm;
//         width: 21cm;
//     }
// </style>
// <h3>date</h3>
// <img src="IMG_1725.jpg" width="790px" alt="Melusina">

// <h4>Potage</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <h4>Plat 1</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <h4>Plat 2</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <h4>Accompagnement</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <h4>Légumes</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <h4>Dessert</h4>
// <h2>Plat</h2>
// <h5>subtitle</h5>

// <p>menu subtitle</p>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <br>
// <img src="IMG_1726.pdf" width="790" alt="">
// <p>hello</p>');

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'portrait');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream();
// ?>
=======
use pdf_creator_main/PdfCreator/Concrete/MpdfCreator.php;
use pdf_creator_main/PdfCreator/PdfCreatorFactory.php;

$pdf = PdfCreatorFactory::createInstance(MpdfCreator::getType());
$pdf->setHtmlContent($this->compile())
    ->setFilename($this->getFileName())
    ->setFormat('A4')
    ->setOrientation($pdf::ORIENTATION_PORTRAIT)
    ->addFont(
        "/path_to_project/assets/fonts/my_great_font.tff", 
        "myGreatFont", 
        $pdf::FONT_STYLE_REGUALAR,
        "normal"
    )
    ->setMargins(15, 10, 15,10)
    ->setTemplateFilePath("/path_to_project/assets/pdf/mastertemplate.pdf")
    ->setOutputMode($pdf::OUTPUT_MODE_DOWNLOAD)
    ->render()
;?>
>>>>>>> 278be6111563a1d9f1fe38a1fb524179f5baec0f
