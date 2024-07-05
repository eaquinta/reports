<?php

namespace Eaquinta\Reports;

use Dompdf\Dompdf;

class PdfReport
{
    public function create($title)
    {
        $dompdf = new Dompdf();
        $html = "<html><body><h1>{$title}</h1></body></html>";
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->output();
    }
}
