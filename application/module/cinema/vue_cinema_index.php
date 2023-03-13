    <h2>cinema</h2>
    <p><a class="btn btn-primary" href="<?=hlien("cinema","edit","id",0)?>">Nouveau cinema</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>_id</th>
			<th>_nom</th>
			<th>_ville</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { ?>
		<tr>
			
			<td><?=mhe($row['cin_id'])?></td>
			<td><?=mhe($row['cin_nom'])?></td>
			<td><?=mhe($row['cin_ville'])?></td>

			
			<td><a class="btn btn-warning" href="<?=hlien("cinema","edit","id",$row["ci_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("cinema","delete","id",$row["ci_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>