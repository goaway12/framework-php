<?php
//Hier komen alle bezoekers met reseveringen van paarden of pony's met de totaalprijs



foreach ($reservations as $reservation){
    foreach ($customers as $customer){
        foreach ($horses as $horse){ ?>
    <?= $customer['name']?> = <?= $horse['horseName']; ?> om <?= date('H:i', strtotime($reservation["time"])); ?> uur <br>
<?php
        }
    }
}
?>