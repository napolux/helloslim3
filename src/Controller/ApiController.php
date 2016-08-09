<?php
namespace HELLO\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class ApiController
 * @package HELLO\Controller
 */
class ApiController extends AbstractController
{
    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function apiExample(Request $request, Response $response, $args)
    {
        $responseArray = ["thisis" => "an api response"];
        return $response->withJSON($responseArray);
    }
}

