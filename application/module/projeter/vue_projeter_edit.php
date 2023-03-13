    <form method="post" action="<?=hlien("projeter","save")?>">
		<input type="hidden" name="pr_id" id="pr_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='pro_id'>_id</label>
                            <input id='pro_id' name='pro_id' type='text' size='50' value='<?=mhe($pro_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_date_debut'>_date_debut</label>
                            <input id='pro_date_debut' name='pro_date_debut' type='text' size='50' value='<?=mhe($pro_date_debut)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_date_fin'>_date_fin</label>
                            <input id='pro_date_fin' name='pro_date_fin' type='text' size='50' value='<?=mhe($pro_date_fin)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_cinema'>_cinema</label>
                            <input id='pro_cinema' name='pro_cinema' type='text' size='50' value='<?=mhe($pro_cinema)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_film'>_film</label>
                            <input id='pro_film' name='pro_film' type='text' size='50' value='<?=mhe($pro_film)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              