<?php
namespace HELLO\Tests;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp;

class HomepageTest extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp()
    {
        $this->client = new GuzzleHttp\Client();
    }

    public function testStuff()
    {
        $this->assertTrue(true);
    }
}
