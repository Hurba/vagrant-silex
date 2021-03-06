<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$title = $slots->get('title', "static");

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="/vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initialscale=1,
            maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css"
          href="/vendor/MyCSS/All.css"/>
    <!-- specific page css included by title -->
    <?php if ($title == "My Site") { ?>
        <link rel="stylesheet" type="text/css"
              href="/vendor/MyCSS/MySite.css"/>
    <?php } ?>
    <?php if ($title == "Pictures") { ?>
        <link rel="stylesheet" type="text/css"
              href="/vendor/MyCSS/carousel.css"/>
    <?php } ?>
    <!-- specific page css end -->
    <meta charset="UTF-8">
    <base href="http://localhost:8001/"/>
    <title><?php $slots->output('title', "My Site") ?></title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/static?titel=My%20Site">My Site</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php echo(($title == "Home") ? 'class="active"' : '') ?>>
                    <a href="/static?titel=Home">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
                        <?php echo(($title == "Home") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?php echo(($title == "Pictures") ? 'class="active"' : '') ?>>
                    <a href="/pics">
                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Pictures
                        <?php echo(($title == "Pictures") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?php echo(($title == "Blogwrite") ? 'class="active"' : '') ?>>
                    <a href="/blogwrite">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Blogwrite
                        <?php echo(($title == "Blogwrite") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?= (($title == "Blogread") ? 'class="active"' : '') ?>>
                    <a href="/blogread">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Blogread
                        <?php echo(($title == "Blogread") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
            </ul>
            <!-- navbar links on right-side -->
            <ul class="nav navbar-nav navbar-right">
                <li <?= (($title == "Login") ? 'class="active"' : '') ?>>
                    <a href="/login">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login
                        <?php echo(($title == "Login") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li
                <li <?= (($title == "Logout") ? 'class="active"' : '') ?>>
                    <a href="/logout">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
                        <?php echo(($title == "Logout") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- content from specific page -->
<?php $slots->output('_content') ?>
<hr/>
</body>
</html>