<?php
namespace HELLO\Tests;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp;
use Symfony\Component\DomCrawler\Crawler;


class HomepageTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8080'
        ]);
    }

    public function testHomepageIsLoadedAndGives200() {
        $response = $this->client->request('GET', '/');
        $this->assertEquals(200, $response->getStatusCode());

        // Crawling for correct Hello World ;)
        $crawler = new Crawler($response->getBody()->getContents());

        $filter = $crawler->filter('h1');
        $this->assertEquals('Hello, Slim 3!', $filter->text(),'Error');
    }
}
