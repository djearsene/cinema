    <h2>participer</h2>
    <p><a class="btn btn-primary" href="<?=hlien("participer","edit","id",0)?>">Nouveau participer</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>_id</th>
			<th>_fonction</th>
			<th>_individu</th>
			<th>_film</th>
				<th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $data as $row) { ?>
		<tr>
			
			<td><?=mhe($row['par_id'])?></td>
			<td><?=mhe($row['par_fonction'])?></td>
			<td><?=mhe($row['par_individu'])?></td>
			<td><?=mhe($row['par_film'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("participer","edit","id",$row["pa_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("participer","delete","id",$row["pa_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>