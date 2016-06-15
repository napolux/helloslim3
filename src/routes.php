<?php
// Homepage
$app->get('/', 'HELLO\Controller\HomepageController:hp')->setName('hello.website.hp');

// Admin
$app->get('/admin', 'HELLO\Controller\AdminHpController:homepage')->setName('hello.admin.hp');
