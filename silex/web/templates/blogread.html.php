<?php
/**
 * @var $view \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Blogread");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Blogeintr&aumlge</div>
                <!-- List group -->
                <ul class="list-group">

                    <?php /** @var $posts */
                    foreach ($posts as $post) {
                        $id = $post["id"];
                        $titel = $post["title"];
                        $created_at = $post["created_at"];
                        $text = substr($post["text"], 0, 29);
                        ?>
                        <li class="list-group-item">
                            <b> <?= $titel ?> </b> vom <i> <?= $created_at ?> </i><br/>
                            <?= $text ?>
                            <a href="/blogread/<?= $id ?>">[...]</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>