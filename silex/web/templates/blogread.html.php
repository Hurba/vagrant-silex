<?php
/**
 * @var $posts
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
                    <!-- display all blogposts with foreach -->
                    <?php foreach ($posts as $post) {
                        //get all parameters
                        $id = $post["id"];
                        $titel = $post["title"];
                        $created_at = $post["created_at"];
                        $text = substr($post["text"], 0, 29);
                        $user = $post["user"];
                        ?>
                        <li class="list-group-item">
                            <!-- write parameters in blogdesign -->
                            <b> <?= $titel ?> </b> vom <i> <?= $created_at ?> </i> by <?= $user ?><br/>
                            <?= $text ?>
                            <a href="/blogread/<?= $id ?>">[...]</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>