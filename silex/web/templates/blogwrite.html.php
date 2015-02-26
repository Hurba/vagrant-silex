<?php
/**
 * @var $view \Symfony\Component\Templating\PhpEngine
 * @var $error
 * @var $logedin
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Blogwrite")
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <!-- Change panel design whether you are logedin or not  -->
            <?php if ($logedin == false) { ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">Achtung! Erst oben rechts Einloggen</div>
            <?php } else{ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Neuer Beitrag</div>
            <?php } ?>
            <!-- end of panel design -->
                <div class="panel-body">
                    <!-- alert if error == true -->
                    <?php if ($error == true) { ?>
                        <div class="alert alert-warning" role="alert">
                            Bitte alle Felder ausfüllen!
                        </div>
                    <?php } ?>
                    <!-- formuladata handling -->
                    <form action="/blogwrite" method="post">
                        <div class="form-group">
                            <label for="titel">Titel</label>
                            <input type="text" class="form-control" id="titel" name="titel"
                                   placeholder="Gib einen Titel an"/>

                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea class="form-control" id="text" name="text" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
