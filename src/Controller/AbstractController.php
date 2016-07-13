<?php
namespace HELLO\Controller;

use Slim\Views\Twig as TwigViews;

/**
 * Class AbstractController
 * @package HELLO\Controller
 */
abstract class AbstractController
{
    /** @var TwigViews view */
    protected $view;

    public function __construct($c)
    {
        $this->view = $c->get('view');
    }
}
