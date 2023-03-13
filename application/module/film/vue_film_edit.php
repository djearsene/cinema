    <form method="post" action="<?=hlien("film","save")?>">
		<input type="hidden" name="fi_id" id="fi_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='fil_id'>_id</label>
                            <input id='fil_id' name='fil_id' type='text' size='50' value='<?=mhe($fil_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='fil_nom'>_nom</label>
                            <input id='fil_nom' name='fil_nom' type='text' size='50' value='<?=mhe($fil_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='fil_date_sortie'>_date_sortie</label>
                            <input id='fil_date_sortie' name='fil_date_sortie' type='text' size='50' value='<?=mhe($fil_date_sortie)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='fil_affiche'>_affiche</label>
                            <input id='fil_affiche' name='fil_affiche' type='text' size='50' value='<?=mhe($fil_affiche)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              