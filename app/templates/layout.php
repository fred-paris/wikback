<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
<!-- cette fonction ->e convertit les caractères péciaux en entités html-->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
<!-- google fonts-->	
<!-- bootstrap-->	
<!-- ici on pourrait mettre le lien vers FontAwesome-->
<!-- si on utilise BootStrap il faudra enlever le Reset-->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>

</html>