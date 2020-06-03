<?php
echo $customer['name']; 
echo $customer['adress'];
echo $customer['phone'];
echo $customer['horse_id'];
?>

<a class = "text-info" href = "<?= URL?>home/updatecust/<?= $customer['id']; ?>" type = "button"><i class="fas fa-edit"></i> Bewerken</a>
