<?php
	$pdo = new PDO('sqlite:../database.sqlite');//On cherche la base de donnée à la racine en utilisant pdo et sqlite
	$stmt = $pdo -> prepare('SELECT * FROM article');//On prépare la requête sql pour récupérer toutes les infos de la table article
	$stmt -> execute();//Exécute la requête sql
	$articles = $stmt -> fetchAll(PDO::FETCH_ASSOC);//Pour rassembler les données par tableau : un tableau = un article

	//index.php?param=val & param2=val2;
	//$_GET['param'] pour récupérer val
	//$_POST['param2'] pour envoyer val2
	if (!empty($_GET['id_article'])) {
	  	$id_art=$_GET['id_article'];
		$requete = $pdo -> prepare('DELETE FROM article WHERE id='.$id_art);//On prépare la requête sql pour récupérer toutes les infos de la table article
		$requete -> execute();//Exécute la requête sql
	}
	//var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Anaïs CONSTANTIN" />
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Articles</title>
	</head>
	<body>
		<h1>Infos météo</h1>
		<section class="container">
		<?php foreach ($articles as $article): ?>
			<article class="article box col-lg-5">
				<h3><?php echo $article['title'];?></h3>
				<p>Ecrit par <?php echo $article['author'];?></p>
				<p><?php echo $article['description'];?></p>
				<p>Retrouvez l'article <a href="<?php echo $article['link'];?>">ici</a></p>
				<a href="index.php?id_article=<?php echo $article['id'];?>" class="btn"><button data-id="<?php echo $article['id'];?>">Remove</button></a><!-- il faudra faire une requête ajax-->
			</article>
		<?php endforeach; ?>
		</section>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>