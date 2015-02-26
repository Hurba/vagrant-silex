<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $titel
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', $titel)
?>

<div class="container mainsite">
    <div class="row">
        <div class="col-xs-12">
            <!-- main attention catcher jumbotron -->
            <div class="jumbotron">
                <h1>My first Bootstrap website!</h1>

                <p>LALAlalskejnansdnfsjcvnakjdbv ah uaehfd jad</p>

                <p><a class="btn btn-primary btn-lg" href="https://www.google.de/" role="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        Search
                    </a></p>
            </div>
        </div>
    </div>
    <!-- Some text areas -->
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body" id="special-text">
                    alsasdasdalsasdasd
                    asdladlad
                    adleldllda
                    asdladlad
                    adleldllda
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    alsasdasdalsasdasd
                    asdladlad
                    adleldllda
                    asdladlad
                    adleldllda
                </div>
            </div>
        </div>
    </div>
</div>