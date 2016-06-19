<?php
namespace HELLO\Controller;

use Slim\Views\Twig as TwigViews;

abstract class AbstractController
{
    protected $view;

    public function __construct($c)
    {
        /** @var TwigViews view */
        $this->view = $c->get('view');
    }
}
