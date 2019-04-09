<?php

declare(strict_types=1);

namespace ExcelTestsUtil;

trait DirLocatorTrait
{
    public function getBaseTestDirectory(): string
    {
        return dirname(__DIR__, 1);
    }

    public function getTempTestDirectory(): string
    {
        return dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'tmp';
    }
}
