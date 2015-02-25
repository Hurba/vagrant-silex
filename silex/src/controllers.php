<?php
use Symfony\Component\HttpFoundation\Request;

/** @var $app */

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/static', function (Request $request) use ($app) {
    $titel = $request->get('titel', "My Site");
    return $app['templating']->render(
        'static.html.php',
        array('titel' => $titel)
    );
});

$app->get('/home', function (Request $request) use ($app) {
    $titel = $request->get('titel', 'Home');
    return $app['templating']->render(
        'static.html.php',
        array('titel' => $titel)
    );
});

$app->get('/pics', function () use ($app) {
    return $app['templating']->render(
        'pics.html.php'
    );
});

$app->match('/blogwrite', function (Request $request) use ($app) {
    $error = false;
    if ($request->isMethod('post')) {
        $titel = $request->get('titel', '');
        $text = $request->get('text', '');
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
        'blogwrite.html.php',
        array('error' => $error)
    );
});

$app->get('/blogread', function () use ($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $app['templating']->render(
        'blogread.html.php',
        array('posts' => $posts)
    );
});

$app->get('/blogread/{id}', function ($id) use ($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id = ?', array($id));
    return $app['templating']->render(
        'eintrag.html.php',
        array( 'post' => $post )
    );
});


$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});