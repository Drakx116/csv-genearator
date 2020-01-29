<?php

/**
 * Class CSVWriter
 */
class CSVWriter
{
    /**
     * @param array $data
     *
     * @return bool
     * @throws Exception
     */
    public function generateFile(array $data)
    {
        return $this->fillCSVFile($data);
    }

    /**
     * Generates the absolute path of the new generated CSV file
     *
     * @return string
     * @throws Exception
     */
    private function generateFilePath()
    {
        $date = new DateTime();

        return './public/generated/' . $date->format('Y-m-d_H-i-s') . '.csv';
    }

    /**
     * Creates the CSV File by adding each line from data
     *
     * @param array $data
     *
     * @return bool
     * @throws Exception
     */
    private function fillCSVFile(array $data)
    {
        $filePath = $this->generateFilePath();

        $stream = fopen($filePath, 'w+');
        foreach ($data as $line) {
             fputcsv($stream, $line);
        }

        return fclose($stream);
    }
}
