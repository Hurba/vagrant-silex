<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $logedin
 * @var $user
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Logout")
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <!-- Change panel design whether you are logedin or not  -->
            <div
                <?php if ($logedin == true) { ?>
                    class="panel panel-danger">
                        <div class="panel-heading">Sie sind noch Angemeldet: <b> <?= $user ?> </b></div>
                <?php } ?>
                <?php if ($logedin == false) { ?>
                    class="panel panel-success">
                        <div class="panel-heading">Erfolgreich Abgemeldet</div>
                <?php } ?>
                <!-- end of panel design -->
                <div class="panel-body">
                    <!-- Logout button -->
                    <p><a class="btn btn-primary" href="/logout/out" role="button">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Abmelden
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</div>