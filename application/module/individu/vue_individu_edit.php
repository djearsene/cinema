    <form method="post" action="<?=hlien("individu","save")?>">
		<input type="hidden" name="in_id" id="in_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='ind_id'>_id</label>
                            <input id='ind_id' name='ind_id' type='text' size='50' value='<?=mhe($ind_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='ind_nom'>_nom</label>
                            <input id='ind_nom' name='ind_nom' type='text' size='50' value='<?=mhe($ind_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='ind_prenom'>_prenom</label>
                            <input id='ind_prenom' name='ind_prenom' type='text' size='50' value='<?=mhe($ind_prenom)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              