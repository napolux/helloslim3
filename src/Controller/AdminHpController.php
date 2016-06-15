<?php
namespace HELLO\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class AdminHpController
 * @package HELLO\Controller
 */
class AdminHpController extends AbstractAdminController
{
    /**
     * Listing all the URLs, paginated
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     * @throws \Exception
     */
    public function homepage(Request $request, Response $response, $args)
    {
        $body = $this->view->fetch('admin/pages/homepage.twig', [
            'title'       => 'Admin Homepage',
        ]);

        return $response->write($body);
    }
}

