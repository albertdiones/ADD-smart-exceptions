<?php
namespace Tests\ADDph\legacy;
use \e_add;

/**
 * Class e_add_test
 * @test
 */
class defaultExceptionTest extends \PHPUnit\Framework\TestCase {

    public function setUp() : void
    {

    }

    public function testLoaded() {
        $e = new e_add("Error occurred");

        $this->assertInstanceOf(e_add::class, $e);
    }
}