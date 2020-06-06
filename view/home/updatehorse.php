<div class = "container">
<h1> Voeg paard of pony toe </h1>
        <form class = "pt-3" name="create" action="storehorse" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Naam:</label>
            <div class="col-sm-10">
            <input type="text" name="name" placeholder = "<?= $horse['horseName']; ?>"> <span class="text-danger"><?php echo $nameErr;?></span>
            </div>
        </div>

		<div class="form-group row">
            <label class="col-sm-2 col-form-label">Soort:</label>
            <div class="col-sm-10">
            <input type="text" name="race"placeholder = "<?= $horse['race']; ?>"> <span class="text-danger"><?php echo $raceErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Leeftijd:</label>
            <div class="col-sm-10">
            <input type="number" name="age" placeholder = "<?= $horse['age']; ?>"> <span class="text-danger"><?php echo $ageErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lengte (in m):</label>
            <div class="col-sm-10">
            <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="height" placeholder = "<?= $horse['height']; ?>"> <span class="text-danger"><?php echo $heightErr;?></span>
            </div>
        </div>

        <input class = "btn btn-info" type="submit" value = "Toevoegen">

        </form>
    </div>
</div>