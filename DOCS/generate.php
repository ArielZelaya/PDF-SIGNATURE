<?php

$im = new Imagick();

$im->setResolution(300,300);
$im->readimage('croped.pdf[0]');
$im->setImageFormat('jpg');
$im->writeImage('thumb2.jpg');
$im->clear();
$im->destroy(); 