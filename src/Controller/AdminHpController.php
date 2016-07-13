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
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function homepage(Request $request, Response $response, $args)
    {
        $body = $this->view->fetch('admin/pages/homepage.twig', [
            'title' => 'Admin Homepage',
        ]);

        return $response->write($body);
    }
}

