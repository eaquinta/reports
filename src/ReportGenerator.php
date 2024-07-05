<?php

namespace Eaquinta\Reports;

use Dompdf\Dompdf;

class PdfReport
{
    public function generateReport($title)
    {
        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $html = "<html><body><h1>{$title}</h1></body></html>";
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->output();
        //$output = $dompdf->output();
        //file_put_contents('report.pdf', $output);
    }
}
