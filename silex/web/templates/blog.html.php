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
            <div class="panel panel-default">
                <div class="panel-heading">Neuer Beitrag</div>
                <div class="panel-body">
                    <?php if ($error == true) { ?>
                        <div class="alert alert-danger" role="alert">
                            Bitte alle Felder ausfüllen!
                        </div>
                    <?php } ?>
                    <form action="/blog" method="post">
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
