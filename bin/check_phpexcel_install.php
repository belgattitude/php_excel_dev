<?php

$checker = PHPExcelChecker::createFromCliArgs();
$checker->runChecks();

/**
 * Quick PHP5.6 compat class to test whether libxl is well installed
 */
class PHPExcelChecker {

    private $license_name;
    private $license_key;

    /**
     * @param string|null $license_name
     * @param string|null $license_key
     */
    public function __construct($license_name = null, $license_key = null) {
        $this->license_name = $license_name;
        $this->license_key = $license_key;
    }

    /**
     * @return PHPExcelChecker
     */
    public static function createFromCliArgs() {
        $args = isset($_SERVER['argv']) ? $_SERVER['argv'] : $GLOBALS['argv'];
        if (count($args) !== 3) {
            self::writeLn("[Warning] Cannot find license detail from command line");
            self::writeLn("[Tip]    > composer check:extension -- \"License name\" \"License key\"");
            self::writeLn("[Tip] or > ./bin/check_phpexcel_install.sh \"License name\" \"License key\"");
        }
        $name = isset($args[1]) ? trim($args[1]) : null;
        $key = isset($args[2]) ? trim($args[2]) : null;
        return new PHPExcelChecker($name, $key);
    }

    /**
     * @return void
     */
    public function runChecks() {

        if (!extension_loaded('excel')) {
            self::writeLn("[Error]: Excel extension not loaded");
            return;
        }

        self::writeLn("[Success]: Excel extension is available");
        $book = new \ExcelBook($this->license_name, $this->license_key, true);
        $book->setLocale('UTF-8');
        if (method_exists($book, 'getPhpExcelVersion')) {
            self::writeLn(" [*] phpexcel version: " . $book->getPhpExcelVersion());
        }
        if (method_exists($book, 'getLibXlVersion')) {
            self::writeLn(" [*] LibXL version: " . str_replace('0', '.', $book->getLibXlVersion()));
        }

        if (!$this->isValidLicense($this->license_name, $this->license_key)) {
            self::writeLn(sprintf("[Error] Invalid license: %s, %s", $this->license_name, $this->license_key));
            return;
        }
        self::writeLn("[Success] Valid license");
    }

    /**
     * @param string|null $license_name
     * @param string|null $license_key
     * @return bool
     */
    public function isValidLicense($license_name=null, $license_key=null) {
        $book = new \ExcelBook($license_name, $license_key, true);
        $book->setLocale('UTF-8');
        $sheet = $book->addSheet('Sheet');
        $written = @$sheet->write(0, 0, 'hello');
        return $written;
    }

    /**
     * @param string $msg
     * @return void
     */
    private static function writeLn($msg) {
        echo $msg . PHP_EOL;
    }
}
