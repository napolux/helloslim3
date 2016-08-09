<?php
// Homepage
$app->get('/', 'HELLO\Controller\HomepageController:hp')->setName('hello.website.hp');

// Admin
$app->get('/admin', 'HELLO\Controller\AdminHpController:homepage')->setName('hello.admin.hp');

// APIs
$app->get('/api', 'HELLO\Controller\ApiController:apiExample')->setName('hello.api.apiExample');

