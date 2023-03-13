    <h2>projeter</h2>
    <p><a class="btn btn-primary" href="<?=hlien("projeter","edit","id",0)?>">Nouveau projeter</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>_id</th>
			<th>_date_debut</th>
			<th>_date_fin</th>
			<th>_cinema</th>
			<th>_film</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { ?>
		<tr>
			
			<td><?=mhe($row['pro_id'])?></td>
			<td><?=mhe($row['pro_date_debut'])?></td>
			<td><?=mhe($row['pro_date_fin'])?></td>
			<td><?=mhe($row['pro_cinema'])?></td>
			<td><?=mhe($row['pro_film'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("projeter","edit","id",$row["pr_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("projeter","delete","id",$row["pr_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>