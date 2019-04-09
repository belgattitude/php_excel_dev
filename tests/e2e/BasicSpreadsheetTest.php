<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Sébastien Vanvelthem. (https://github.com/belgattitude)
 */

namespace ExcelE2eTests;

use ExcelTestsUtil\DirLocatorTrait;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PHPUnit\Framework\TestCase;

class BasicSpreadsheetTest extends TestCase
{
    use DirLocatorTrait;

    public function setUp(): void
    {
        if (!extension_loaded('excel')) {
            throw new \RuntimeException(__METHOD__ . ' E2E tests requires excel (php_excel) extension to be loaded');
        }
    }

    public function testSimpleSpreasheet(): void
    {
        $output = $this->getTempTestDirectory() . '/test_simple_spreadsheet.xlsx';
        if (file_exists($output)) {
            unlink($output);
        }

        $book = new \ExcelBook('[unlicenced]', '[emptykey]', true);
        $book->setLocale('UTF-8');
        $sheet = $book->addSheet('Sheet');

        foreach ($this->getExampleData() as $rowIdx => $row) {
            foreach ($row as $colIdx => $value) {
                $sheet->write($rowIdx + 1, $colIdx, $value);
            }
        }

        $book->save($output);

        // load with spreadsheet
        $actualData = $this->getSheetAsArray($output);
        array_shift($actualData); // remove the license header
        self::assertEquals($this->getExampleData(), $actualData);
    }

    /**
     * This method the.
     */
    protected function getSheetAsArray(string $file, int $sheetIndex = 0): array
    {
        $spreadsheet = IOFactory::load($file);
        $worksheet   = $spreadsheet->getAllSheets()[$sheetIndex];

        $highestRow         = $worksheet->getHighestRow();
        $highestColumn      = $worksheet->getHighestColumn();
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);

        $data = [];
        for ($row = 1; $row <= $highestRow; ++$row) {
            for ($col = 1; $col <= $highestColumnIndex; ++$col) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);

                if ($cell !== null && ($value = $cell->getValue()) !== null) {
                    $data[$row][$col - 1] = $value;
                }
            }
        }

        return $data;
    }

    protected function getExampleData(): array
    {
        return [
            [10, 'name1éà@email.com', 12.3, '2020-02-01'],
            [11, 'name2éà@email.com', 10002.3, '2020-02-01'],
            [12, 'name3éà@email.com', 12.3456, '2020-02-01'],
            [13, 'name4éà@email.com', 12.3111, '2020-02-01'],
        ];
    }
}
