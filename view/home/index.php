<div class="container">
	<div class = "row">

    <div class = "col-6">
        <h1> Voeg paard of pony toe </h1>
        <form class = "pt-3" name="create" action="storehorse" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Naam:</label>
            <div class="col-sm-10">
            <input type="text" name="name"> <span class="text-danger"><?php echo $nameErr;?></span>
            </div>
        </div>

		<div class="form-group row">
            <label class="col-sm-2 col-form-label">Soort:</label>
            <div class="col-sm-10">
            <input type="text" name="race"> <span class="text-danger"><?php echo $raceErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Leeftijd:</label>
            <div class="col-sm-10">
            <input type="number" name="age"> <span class="text-danger"><?php echo $ageErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lengte (in m):</label>
            <div class="col-sm-10">
            <input type="number" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="height"> <span class="text-danger"><?php echo $heightErr;?></span>
            </div>
        </div>

        <input class = "btn btn-info" type="submit" value = "Toevoegen">

        </form>
    </div>

		<div class = "col-6">
		<table class="table table-striped">
		<thead class="thead-dark">
		<tr>
				<th>Naam</th>
				<th>Leeftijd</th>
				<th>Soort</th>
				<th>Lengte</th>
				<th>Paard/Pony</th>
			</tr>
		</thead>
		<?php foreach ($horses as $horse){ ?>
			<tr>
				<td><a class = "text-danger" href="<?= URL?>home/deletehorse/<?= $horse['id']; ?>"><i class="fas fa-times"></i></a> <a class = "text-info" href = "<?= URL?>home/horse/<?= $horse['id']; ?>" type = "button"><i class="fas fa-info-circle"></i></a> <?= $horse['name'] ?> </td>
				<td><?= $horse['age'] ?> </td>
				<td><?= $horse['race'] ?> </td>
				<td><?= $horse['height'] ?> cm</td>
				<td><?php 
				if ($horse['height'] > 1.47){
					echo 'Paard';
					} else { 
						echo 'Pony';
						} ?> </td>
			</tr>

		<?php } ?>

		</table>
	</div>
</div>
