<?php
$app->get('/api', 'HELLO\Controller\ApiController:apiExample')->setName('hello.api.apiExample');