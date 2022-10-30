<?php

namespace Hmos9c\PhpMvc;

use Monolog\Logger;

class LoggerTest extends \PHPUnit\Framework\TestCase
{
    public function testLogger()
    {
        $logger = new Logger("Hmos9c");

        self::assertNotNull($logger);
    }

    public function testLoggerWithName()
    {
        $logger = new Logger(LoggerTest::class);

        self::assertNotNull($logger);
    }


}