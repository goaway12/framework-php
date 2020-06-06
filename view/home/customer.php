<div class = "container">
	<table class="table table-striped">
			<thead class="thead-dark">
			<tr>
					<th>Naam</th>
					<th>Adress</th>
					<th>phone</th>
				</tr>
			</thead>
				<tr>
					<td><?= $customer['name'] ?> </td>
					<td><?= $customer['adress'] ?> </td>
					<td><?= $customer['phone'] ?> </td>
				</tr>
	<a class = "text-info" href = "<?= URL?>home/updatecust/<?= $customer['id']; ?>" type = "button"><i class="fas fa-edit"></i> Bewerken</a>
			</table>

			<h2>Gereserveerde paarden: </h2>
			<?php foreach ($reservations as $reservation){ ?>
				<?= $reservation['horse_id'] ?> om <?= date('H:i', strtotime($reservation["time"])); ?> uur <br>
				<?php
				$price = $price + 55;
			}
			?>
			<br>
			<h3>Kosten: </h3>
			&euro;<?= $price ?>,-
</div>