<?php
/**
 * @var $view
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
                <li <?php echo(($title == "Music") ? 'class="active"' : '') ?>>
                    <a href="/music">
                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music
                        <?php echo(($title == "Music") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?php echo(($title == "Blog") ? 'class="active"' : '') ?>>
                    <a href="/blog">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Blog
                        <?php echo(($title == "blog") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?= (($title == "Options") ? 'class="active"' : '') ?>>
                    <a href="/options">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Options
                        <?php echo(($title == "Options") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
            </ul>
       </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?php $slots->output('_content') ?>
<hr/>
</body>
</html>