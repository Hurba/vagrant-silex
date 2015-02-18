<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/static', function () use ($app) {
    return $app['templating']->render(
        'static.html.php'
    );
});

$app->get('/home', function () use ($app) {
    return $app['templating']->render(
        'home.html.php'
    );
});

$app->get('/music', function () use ($app) {
    return $app['templating']->render(
        'music.html.php'
    );
});

$app->match('/blog', function (Request $request) use ($app) {
    if ($request->isMethod('post')) {
        $titel = $request->get("titel");
        $text = $request->get("text");
        return $titel . $text;
    } else {
        return $app['templating']->render(
            'blog.html.php');
    }
});

$app->get('/options', function () use ($app) {
    return $app['templating']->render(
        'options.html.php'
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});