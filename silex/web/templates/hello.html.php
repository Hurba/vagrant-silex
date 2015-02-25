<?php
/**
 * @var $view   \Symfony\Component\Templating\PhpEngine
 * @var $name
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php');
$slots->set('title', "Hello")
?>

Hello <?= $name; ?>!