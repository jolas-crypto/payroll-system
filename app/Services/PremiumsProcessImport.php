<?php

namespace App\Services;

use App\Models\SSSPremium;

class PremiumsProcessImport
{
    public function import($file)
    {
        $pathFile = $file->getRealPath();
        $orginalFile = fopen($pathFile, 'r');
        $headerFile = fgetcsv($orginalFile);

        $normalizedHeader = $this->normalizeHeader($headerFile);

        while (($row = fgetcsv($orginalFile)) !== false) {
            $dataRow = array_combine($normalizedHeader, $row);

            SSSPremium::create($dataRow);
        }

        fclose($orginalFile);
    }

    protected function normalizeHeader($headerRow)
    {
        return array_map(function($header) {
            $header = strtoupper($header);
            return config('premiums.sss_header_normalize')[$header] ?? $header;
        }, $headerRow);
    }
}
