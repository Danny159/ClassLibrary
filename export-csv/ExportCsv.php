<?php
/**
 * Class to export data to a CSV
 *
 */
class ExportCsv
{
    private $headers = false;
    private $data = false;

    /**
     * Contrsuctor to export data to CSV
     *
     * @param String $filename - Name of the file to export
     * @param Array $headers   - Array with values that are used for the header
     * @param Array $data      - Array of values that is going to be used for the data
     */
    public function __construct($filename, $headers, $data)
    {
        $this->filename = $filename;
        $this->headers = $headers;
        $this->data = $data;
    }

    /**
     * Public function to call to download the file as a CSV
     *
     * @return Download CSV
     */
    public function downloadCsv()
    {
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=".$this->filename."");
        header("Content-Transfer-Encoding: binary");

        $this->array2csv();
    }

    /**
     * Converts the Array into csv by using the fputcsv function
     *
     * @return Outputs the Data
     */
    private function array2csv()
    {
        if (count($this->data) == 0) {
            return null;
        }

        $csv = fopen("php://output", 'w');

        fputcsv($csv, $this->headers);

        foreach ($this->data as $row) {
            fputcsv($csv, $row);
        }

        fclose($csv);
    }
}
?>