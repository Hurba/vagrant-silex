<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $logedin
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Login")
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if ($logedin == true) { ?>
            <div class="panel panel-success">
                <div class="panel-heading">Sie sind schon Eingeloged</div>
            <?php } ?>
            <?php if ($logedin == false) { ?>
            <div class="panel panel-danger">
                <div class="panel-heading">Bitte loggen Sie sich mit einen Namen ein!</div>
            <?php } ?>
                <div class="panel-body">
                    <form action="/login" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Gib deinen Namen an"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Einloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>