<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "User") ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Neuer Beitrag</div>
                <div class="panel-body">
                    <form action="/blog" method="post">
                        <div class="form-group">
                            <label for="titel">Titel</label>
                            <input type="text" class="form-control" id="titel" name="titel"
                                   placeholder="Gib einen Titel an"/>

                        </div>
                        <div class="form-group">
                            <label for="text">Titel</label>
                            <textarea class="form-control" id="text" name="text" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
