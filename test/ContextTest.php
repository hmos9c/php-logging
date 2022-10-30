<?php

namespace Hmos9c\PhpMvc;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {

        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "sanas"]);
        $logger->info("Try login user", ["username" => "sanas"]);
        $logger->info("Success login user", ["username" => "sanas"]);
        $logger->info("Tidak ada context");

        self::assertNotNull($logger);

    }

}