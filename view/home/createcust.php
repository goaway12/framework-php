<div class="container">
<div class = "row">
    <div class = "col-6">
        <h1> Voeg bezoekers toe </h1>
        <form class = "pt-3" name="create" action="storecust" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Naam:</label>
            <div class="col-sm-10">
            <input type="text" name="name"> <span class="text-danger"><?php echo $nameErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Adres:</label>
            <div class="col-sm-10">
            <input type="text" name="adress"> <span class="text-danger"><?php echo $adressErr;?></span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Telefoon:</label>
            <div class="col-sm-10">
            <input type="text" name="phone"> <span class="text-danger"><?php echo $phoneErr;?></span>
            </div>
        </div>

        <input class = "btn btn-info" type="submit" value = "Toevoegen">

        </form>
    </div>

    <div class = "col-6">
    <table class="table table-striped">
	<thead class="thead-dark">
	<tr>
            <th>ID</th>
			<th>Naam</th>
			<th>Adres</th>
			<th>Telefoon</th>
		</tr>
	</thead>
	<?php foreach ($customers as $customer){ ?>
		<tr>
			<td> <a class = "text-danger" href="<?= URL?>home/deletecust/<?= $customer['id']; ?>"><i class="fas fa-times"></i></a> <a class = "text-info" href = "<?= URL?>home/customer/<?= $customer['id']; ?>" type = "button"><i class="fas fa-info-circle"></i></a><?= $customer['id'] ?> </td> 
			<td><?= $customer['name'] ?> </td>
			<td><?= $customer['adress'] ?> </td>
			<td><?= $customer['phone'] ?> </td>
            
		</tr> 

	<?php } ?>

	</table>
    </div>
</div>
</div>
