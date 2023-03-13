    <h2>individu</h2>
    <p><a class="btn btn-primary" href="<?=hlien("individu","edit","id",0)?>">Nouveau individu</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>_id</th>
			<th>_nom</th>
			<th>_prenom</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { ?>
		<tr>
			
			<td><?=mhe($row['ind_id'])?></td>
			<td><?=mhe($row['ind_nom'])?></td>
			<td><?=mhe($row['ind_prenom'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("individu","edit","id",$row["in_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("individu","delete","id",$row["in_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>