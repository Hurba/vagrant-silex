<?php
use Symfony\Component\HttpFoundation\Request;

/** @var $app*/

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/static', function (Request $request) use ($app) {
    $titel = $request->get('titel','');
    return $app['templating']->render(
        'static.html.php',
        array('titel' => $titel)
    );
});

$app->get('/home', function () use ($app) {
    return $app['templating']->render(
        'static.html.php',
        array('titel' => 'Home')
    );
});

$app->get('/music', function () use ($app) {
    return $app['templating']->render(
        'music.html.php'
    );
});

$app->match('/blog', function (Request $request) use ($app) {
    $error = false;
    if ($request->isMethod('post')) {
        $titel = $request->get('titel','');
        $text = $request->get('text','');
        if ($titel == '' || $text == '') {
            $error = true;
        } else {
            /** @var $dbConnecton Doctrine\DBAL\Connection */
            $dbConnection = $app['db'];
            $createdAt = date('Y-m-d');
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $titel,
                    'text' => $text,
                    'created_at' => $createdAt
                )
            );
            return $app['templating']->render(
                'success.html.php');
        }
    }

    return $app['templating']->render(
        'blog.html.php',
        array('error' => $error)
    );
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