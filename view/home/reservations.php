<?php
//Hier komen alle bezoekers met reseveringen van paarden of pony's met de totaalprijs



foreach ($reservations as $reservation){ ?>

    <?= $reservation['customer_id']?> = <?= $reservation['horse_id']; ?> <br>
<?php
}
?>