    <form method="post" action="<?= hlien("cinema", "save") ?>">
        <input type="hidden" name="ci_id" id="ci_id" value="<?= $id ?>" />

        <div class='form-group'>
            <label for='cin_id'>_id</label>
            <input id='cin_id' name='cin_id' type='text' size='50' value='<?= mhe($cin_id) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='cin_nom'>_nom</label>
            <input id='cin_nom' name='cin_nom' type='text' size='50' value='<?= mhe($cin_nom) ?>' class='form-control' />
        </div>
        <div class='form-group'>
            <label for='cin_ville'>_ville</label>


            <select id='cin_ville' name='cin_ville' class='form-control'>
                <?= Table::HTMLoptions("select * from cinema order by cin_ville", "cin_ville", "cin_ville", $cin_ville) ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
    </form>