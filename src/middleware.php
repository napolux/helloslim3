<?php
// Application middleware
// Authentication...
$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => ["/admin"],
    "realm" => "Administration Panel for HelloSlim3",
    "users" => $app->getContainer()->get('settings')['admin_users'],
    "error" => function ($request, $response, $arguments) {
        $data = [];
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response->write(json_encode($data, JSON_UNESCAPED_SLASHES));
    }
]));
