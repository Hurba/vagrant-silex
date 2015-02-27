<?php
use Symfony\Component\HttpFoundation\Request;

/** @var $app */

// Session provider registration
$app->register(new Silex\Provider\SessionServiceProvider());

//Loginpage
$app->match('/login', function (Request $request) use ($app) {
    //always set logedin = false and check later if you are logedin
    $logedin = false;
    //Get Username from session or it's null
    $user = $app['session']->get('user', null);
    //Check if you are logedin
    if ($user != null || $user != '') {
        $logedin = true;
    }
    //Login via formular, only when not logedin (= false)
    if ($request->isMethod('post') && $logedin == false) {
        $user = $request->get('user', null);
        //If User not null or '' then you are logedin (= true) and set session->User
        if ($user != null || $user != '') {
            $app['session']->set('user', $user);
            $logedin = true;
        }
    }
    //return login template with var: $logedin, $user
    return $app['templating']->render(
        'login.html.php',
        array(
            'logedin' => $logedin,
            'user' => $user
        )
    );
});

//Logoutpage
$app->get('/logout', function () use ($app) {
    $logedin = false;
    //Get Username from session or it's null
    $user = $app['session']->get('user');
    //Check if you are logedin
    if ($user != null || $user != '') {
        $logedin = true;
    }
    //return logout template with var: $logedin
    return $app['templating']->render(
        'logout.html.php',
        array(
            'logedin' => $logedin,
            'user' => $user
        )
    );
});

//Logout, then render Logoutpage
$app->get('/logout/out', function () use ($app) {
    //Set logedin = false and set session->User null
    $logedin = false;
    $app['session']->set('user', null);
    return $app['templating']->render(
        'logout.html.php',
        array('logedin' => $logedin)
    );
});

//welcomepage not in navigation
$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

//staticpage
$app->get('/static', function (Request $request) use ($app) {
    //no title in url, default is My Site
    $titel = $request->get('titel', 'My Site');
    return $app['templating']->render(
        'static.html.php',
        array('titel' => $titel)
    );
});

//another route for staticpage with title = Home
$app->get('/home', function (Request $request) use ($app) {
    $titel = $request->get('titel', 'Home');
    return $app['templating']->render(
        'static.html.php',
        array('titel' => $titel)
    );
});

//picturespage
$app->get('/pics', function () use ($app) {
    return $app['templating']->render(
        'pics.html.php'
    );
});

//blogwrite page with dbConnecton
$app->match('/blogwrite', function (Request $request) use ($app) {
    //check if all fields are filled with error(default is false)
    $error = false;
    //also check if user is logedin like abouve
    $logedin = false;
    $user = $app['session']->get('user');
    if ($user != null || $user != '') {
        $logedin = true;
    }
    if ($request->isMethod('post')) {
        //get formular data
        $titel = $request->get('titel', '');
        $text = $request->get('text', '');
        if ($titel == '' || $text == '') {
            //if formular is not filled error = true
            $error = true;
        } else if ($logedin) {
            //all parameters are OK then you write the blog into DB and render successpage
            /** @var $dbConnecton Doctrine\DBAL\Connection */
            $dbConnection = $app['db'];
            $createdAt = date('Y-m-d');
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $titel,
                    'text' => $text,
                    'created_at' => $createdAt,
                    'user' => $user
                )
            );
            return $app['templating']->render(
                'success.html.php');
        }//OK ends
    }
    //render template with var: $error, $logedin, $user
    return $app['templating']->render(
        'blogwrite.html.php',
        array(
            'error' => $error,
            'logedin' => $logedin,
            'user' => $user
        )
    );
});

//read all blogentries
$app->get('/blogread', function () use ($app) {
    $dbConnection = $app['db'];
    // get all entries form DB
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $app['templating']->render(
        'blogread.html.php',
        array('posts' => $posts)
    );
});

//read one blogentry
$app->get('/blogread/{id}', function ($id) use ($app) {
    $dbConnection = $app['db'];
    // get one entry from DB
    $post = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id = ?', array($id));
    return $app['templating']->render(
        'eintrag.html.php',
        array('post' => $post)
    );
});

//not used twigpage
$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});