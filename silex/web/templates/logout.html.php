<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $logedin
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Logout")
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if ($logedin == true) { ?>
            <div class="panel panel-danger">
            <div class="panel-heading">Sie sind noch Eingeloged</div>
            <?php } ?>
            <?php if ($logedin == false) { ?>
            <div class="panel panel-success">
                <div class="panel-heading">Erfolgreich Ausgeloggd</div>
                <?php } ?>
                <div class="panel-body">
                    <p><a class="btn btn-primary" href="/logout#" role="button">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Logout
                        </a></p>
                </div>
            </div>
        </div>
    </div>
</div>