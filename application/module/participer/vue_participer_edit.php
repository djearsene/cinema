    <form method="post" action="<?=hlien("participer","save")?>">
		<input type="hidden" name="pa_id" id="pa_id" value="<?= $id ?>" />
		
                        <div class='form-group'>
                            <label for='par_id'>_id</label>
                            <input id='par_id' name='par_id' type='text' size='50' value='<?=mhe($par_id)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='par_fonction'>_fonction</label>
                            <input id='par_fonction' name='par_fonction' type='text' size='50' value='<?=mhe($par_fonction)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='par_individu'>_individu</label>
                            <input id='par_individu' name='par_individu' type='text' size='50' value='<?=mhe($par_individu)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='par_film'>_film</label>
                            <input id='par_film' name='par_film' type='text' size='50' value='<?=mhe($par_film)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              