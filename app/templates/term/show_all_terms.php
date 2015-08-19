<?php $this->layout('layout', ['title' => 'Tous les termes']) ?>

<?php $this->start('main_content') ?>
	<h2>Tous les termes.</h2>

<!-- afficher les termes ici-->
	<table>
		<tr>
			<th>Id</th>
			<th>Terme</th>
			<th>Modifications</th>
			<th>Actions</th>
		</tr>
	<?php foreach($terms as $term): ?>
		<tr>
			<td><?php echo $term['id'] ?></td>
<!-- 		ici à la place du echo on peut/il vaut mieux 
			faire un this->e sur les 3 lignes(cf. layout.php)
 -->		<td><?= $this->e $term['name'] ?></td>
			<td><?php echo $term['modifiedDate'] ?></td>
			<td></td>
		</tr>
	<?php endforeach; ?>
	</table>

<?php $this->stop('main_content') ?>
