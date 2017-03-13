<?php
	include __DIR__.'/../vendor/autoload.php';//__DIR__ est le chemin depuis là où on est

	$pdo = new PDO('sqlite:../database.sqlite');
	$stmt = $pdo -> prepare("INSERT INTO article (title, description, link, author) VALUES (:title, :description, :link, :author)");

	$feed = Zend\Feed\Reader\Reader::import('http://etin.yourphototravel.com/fr/etins.rss');
	foreach ($feed as $item):
		$stmt->execute([
			'title' => $item->getTitle(),
			'description' => $item->getDescription(),
			'link' => $item->getLink(),
			'author' => $item->getAuthors()
		]);
	endforeach;
?>