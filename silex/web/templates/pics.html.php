<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Pictures");
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
            <div id="MyPictureCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#MyPictureCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#MyPictureCarousel" data-slide-to="1"></li>
                    <li data-target="#MyPictureCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/vendor/images/Berg.jpg" alt="Bild von Berg">

                        <div class="carousel-caption">
                            Berg, Haus
                        </div>
                    </div>
                    <div class="item">
                        <img src="/vendor/images/Urlaub.jpg" alt="Bild von Strand mit Boot">

                        <div class="carousel-caption">
                            Strand, Boot
                        </div>
                    </div>
                    <div class="item">
                        <img src="/vendor/images/Sonne.jpg" alt="Bild von Meer mit Sonnenschein">

                        <div class="carousel-caption">
                            Sonne,Meer
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#MyPictureCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#MyPictureCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>