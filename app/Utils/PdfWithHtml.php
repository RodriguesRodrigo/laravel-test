<?php

namespace App\Utils;

class PdfWithHtml
{
    /**
     * Create a new Object instance.
     * 
     * @return void
     */
    public function __construct($dirname, $filename, $title, $description) {
        $this->dirname = $dirname;
        $this->filename = $filename;
        $this->title = $title;
        $this->description = is_array($description) ? $description : array($description);
    }

    /**
     * Set HTML Pdf content.
     * 
     * @return Array
     */
    public function content() {
        $data = [
            'title' => $this->title,
            'description' => $this->description
        ];

        return [
            'view' => view('defaultPdf', $data),
            'data' => $data,
        ];
    }

    /**
     * Generate a PDF using Mpdf and save the file.
     * 
     * @return void
     */
    public function generate() {
        $data = $this->content();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($data['view'], \Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output($this->dirname . $this->filename);
    }
}
