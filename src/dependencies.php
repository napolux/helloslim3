<?php
// Configuration for Slim Dependency Injection Container

$container = $app->getContainer();

// Flash messages
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

// Monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// Using Twig as template engine
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => false //'cache'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

// Doctrine configuration
$container['em'] = function ($c) {
    $settings = $c->get('settings');
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
        $settings['doctrine']['meta']['entity_path'],
        $settings['doctrine']['meta']['auto_generate_proxies'],
        $settings['doctrine']['meta']['proxy_dir'],
        $settings['doctrine']['meta']['cache'],
        false
    );
    return \Doctrine\ORM\EntityManager::create($settings['doctrine']['connection'], $config);
};

// Customized Resources Here!

// Homepage Controller
$container['HELLO\Controller\HomepageController'] = function ($c) {
    return new HELLO\Controller\HomepageController($c);
};

// Admin Homepage Controller
$container['HELLO\Controller\AdminHpController'] = function ($c) {
    return new HELLO\Controller\AdminHpController($c);
};

