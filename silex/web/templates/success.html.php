<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Blog")
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-success" role="alert">
                <b>Erfolgreich Gespeichert!</b>
            </div>
            <!-- Buttons back to blogwrite or to overview of all blogentries -->
            <a class="btn btn-primary" href="/blogwrite" role="button">Weiteren Eintrag hinzufügen?</a>
            <a class="btn btn-primary" href="/blogread" role="button">Alle Eintr&aumlge lesen?</a>
        </div>
    </div>
</div>