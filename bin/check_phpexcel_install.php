<?php

$checker = new PHPExcelChecker();
$checker->runChecks();

class PHPExcelChecker {

    private $license_name;
    private $license_key;

    public function __construct(string $license_name = null, string $license_key = null) {
        $this->license_name = $this->license_name;
        $this->license_key = $this->license_key;
    }

    public function runChecks(): void {

        if (!extension_loaded('excel')) {
            $this->writeLn("[Error]: Excel extension not loaded");
            return;
        }

        $this->writeLn("[Success]: Excel extension is available");
        $book = new \ExcelBook($this->license_name, $this->license_key, true);
        $book->setLocale('UTF-8');
        $this->writeLn(" [*] phpexcel version: " . $book->getPhpExcelVersion());
        $this->writeLn(" [*] LibXL version: " . str_replace('0', '.', $book->getLibXlVersion()));

        if (!$this->isValidLicense($this->license_name, $this->license_key)) {
            $this->writeLn(sprintf("[Error] Invalid license: %s, %s", $this->license_name, $this->license_key));
            return;
        }
        $this->writeLn("[Success] Valid license");
    }

    public function isValidLicense(?string $license_name=null, ?string $license_key=null): bool {
        $book = new \ExcelBook($license_name, $license_key, true);
        $book->setLocale('UTF-8');
        $sheet = $book->addSheet('Sheet');
        $written = @$sheet->write(0, 0, 'hello');
        return $written;
    }

    private function writeLn(string $msg): void {
        echo $msg . PHP_EOL;
    }

}
