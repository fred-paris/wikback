<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
<!-- cette fonction ->e convertit les caractères péciaux en entités html-->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
<!-- google fonts-->	
<!-- ici on pourrait mettre le lien vers FontAwesome-->
<!-- si on utilise ici BootStrap il faudra enlever le Reset-->
<!-- 	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
 --></head>

<body>
	<div class="container">
		<header>
			<h1>Wikébec Admin :: <?= $this->e($title) ?></h1>
<!-- 			on met ce lien sur layout comme ça la fonction appraitra sur ttes les pages du b.o.
 -->			<a href="<?= $this->url('change_wotd') ?>" title="Modifier le mot du jour">Nouveau mot du jour</a>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>

</html>