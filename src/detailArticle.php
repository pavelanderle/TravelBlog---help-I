<?php

require "../vendor/autoload.php";
require "classes.php";

$latte = new Latte\Engine;
$latte->setTempDirectory('../temp');

$actArticle = new Article();
$actArticle -> loadDataFromDB(1); // detail článku s idArticle=1

$params = [
	'article' => $actArticle,
];

// kresli na výstup
$latte->render('../templates/detailArticle.latte', $params);
?>