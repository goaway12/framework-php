
<div class="container">
    <h1> Voeg reserveringen toe </h1>

    <form class = "pt-3" name="create" action="storereservation" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bezoeker:</label>
        <div class="col-sm-10">
            <select name="customer_id">
            <?php foreach($customers as $customer){?>
                <option value="<?= htmlentities($customer["id"])?>"><?= htmlentities($customer["name"])?> (ID = <?= htmlentities($customer["id"])?>)</option>
            <?php } ?>
            </select>
        </div>

        <label class="col-sm-2 col-form-label">Paard of pony:</label>
        <div class="col-sm-10">
            <select name="horse_id">
            <?php foreach($horses as $horse){?>
                <option value="<?= htmlentities($horse["id"])?>"><?= htmlentities($horse["name"])?>
                <?php if ($horse['height'] > 1.47){
					echo '(Paard)';
					} else { 
						echo '(Pony)';
						} ?>
                        </option>
            <?php } ?>
            </select>
        </div>
        <input class = "mb-3 btn btn-info" type="submit" value = "Inplannen">
    </form>   
</div>