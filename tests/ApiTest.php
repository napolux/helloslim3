<?php
namespace HELLO\Tests;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp;

/**
 * Class ApiTest
 * @package HELLO\Tests
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    /** @var  GuzzleHttp\Client */
    protected $client;

    public function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8080'
        ]);
    }

    public function testApiIsLoadedAndGives200() {
        $data = $this->makeRequestCheckStatusAndReturnData("/api");
        $this->assertEquals($data['thisis'], "an api response", 'API is broken!');
    }

    /**
     * Making request, checking status and returning data as array
     * @param $path
     * @return array
     */
    private function makeRequestCheckStatusAndReturnData($path)
    {
        $response = $this->client->get($path);
        $this->assertContains('application/json', $response->getHeader('content-type')[0], 'Not a JSON response');
        $this->assertEquals(200, $response->getStatusCode());
        return json_decode($response->getBody(), true);
    }
}
