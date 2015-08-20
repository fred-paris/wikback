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
		<tr <?php if ($term['is_wotd']) echo 'class="wotd"'; ?>>
			<td><?= $this->e($term['id']) ?></td>
		<!-- ou
			<td><?php echo $term['id'] ?></td> -->
<!-- 		ici à la place du echo on peut/il vaut mieux 
			faire un this->e sur les 3 lignes(cf. layout.php)
 -->		<td><?= $this->e($term['name']) ?></td>
		<!-- ou etc...
-->			<td><?= $this->e($term['modifiedDate']) ?></td>
		<!-- ou etc...
-->			<td>
				<a href="<?php echo $this->url('delete_term', ['id' => $term['id']]) ?>" title="Effacer ce terme"><i class="fa fa-trash-o"></i> Effacer
				</a>
				<a href="<?php echo $this->url('edit_term', ['id' => $term['id']]) ?>" title="Modifier ce terme"><i class="fa fa-pencil"></i> Modifier
				</a>
				<a href="<?php echo $this->url('change_wotd', ['id' => $term['id']]) ?>" title="Choisir comme mdj"><i class="fa fa-star-o"></i> Mot du jour
				</a>
			</td>	
		</tr>
	<?php endforeach; ?>
	</table>

<?php $this->stop('main_content') ?>
