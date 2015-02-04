<?php $title = $view['slots']->get('title', "static") ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="/vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="/vendor/jquery/dist/js/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initialscale=1,
            maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title><?php $view['slots']->output('title', "My Site") ?></title>
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
            <a class="navbar-brand" href="/static">My Site</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php echo(($title == "Home") ? 'class="active"' : '') ?>>
                    <a href="/home">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
                        <?php echo(($view['slots']->get('title') == "Home") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?php echo(($title == "Music") ? 'class="active"' : '') ?>>
                    <a href="/music">
                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music
                        <?php echo(($title == "Music") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?php echo(($title == "User") ? 'class="active"' : '') ?>>
                    <a href="/user">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User
                        <?php echo(($view['slots']->get('title') == "User") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
                <li <?=(($title == "Options") ? 'class="active"' : '') ?>>
                    <a href="/options">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Options
                        <?php echo(($view['slots']->get('title') == "Options") ? '<span class="sr-only">(current)</span>' : '') ?>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?php $view['slots']->output('_content') ?>
<hr/>
</body>
</html>