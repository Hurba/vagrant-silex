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
            <!-- Change panel design whether you are logedin or not  -->
            <div
                <?php if ($logedin == true) { ?>
                    class="panel panel-success">
                        <div class="panel-heading">Sie sind Angemeldet, Abmelden oben Rechts!</div>
                <?php } ?>
                <?php if ($logedin == false) { ?>
                    class="panel panel-danger">
                        <div class="panel-heading">Bitte melden Sie sich mit einen Namen an!</div>
                <?php } ?>
                <!-- end of panel design -->
                <div class="panel-body">
                    <!-- formuladata for login -->
                    <form action="/login" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Gib deinen Namen an"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Anmelden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>