    <h2>film</h2>
    <p><a class="btn btn-primary" href="<?=hlien("film","edit","id",0)?>">Nouveau film</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>_id</th>
			<th>_nom</th>
			<th>_date_sortie</th>
			<th>_affiche</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { ?>
		<tr>
			
			<td><?=mhe($row['fil_id'])?></td>
			<td><?=mhe($row['fil_nom'])?></td>
			<td><?=mhe($row['fil_date_sortie'])?></td>
			<td><?=mhe($row['fil_affiche'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("film","edit","id",$row["fi_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("film","delete","id",$row["fi_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>