<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 * @var $post
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Blogread");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!-- Heading of one entry -->
                    <b><?= $post["title"] ?></b> vom
                    <i><?= $post["created_at"] ?></i> by
                    <?= $post["user"] ?>
                </div>
                <div class="panel-body">
                    <!-- Text of one entry -->
                    <?= $post["text"] ?>
                </div>
                <div class="panel-footer">
                    <!-- Button back to all entries -->
                    <p><a class="btn btn-primary btn-sm" href="/blogread" role="button">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            Zur&uumlck
                        </a></p></div>
            </div>
        </div>
    </div>
</div>