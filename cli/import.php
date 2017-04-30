<?php
	include __DIR__.'/../vendor/autoload.php';
	$path = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
	try {
		//importe le flux rss
		$pdo = new PDO('sqlite:' . $path . 'database.sqlite');
	}
	catch (PDOException $e) {
		echo 'Connexion échouée à la BdD : ' . $e->getMessage();
	}
	$stmt = $pdo->prepare('INSERT INTO article (title, description, link, author) VALUES (:title, :description, :link, :author)');
	$feed = Zend\Feed\Reader\Reader::import('http://www.numerama.com/feed/');
	foreach($feed as $item){
		$stmt->execute([
			'title' => $item->getTitle(),
			'description' => $item ->getDescription(),
			'link' => $item->getLink(),
			'author' => $item->getAuthor(0)['name']
		]);
	}
?>