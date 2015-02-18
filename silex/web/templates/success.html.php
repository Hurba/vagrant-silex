<?php
/**
 * @var $view
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
            <a class="btn btn-primary" href="/blog" role="button">Weiteren Eintrag hinzufügen?</a>
        </div>
    </div>
</div>