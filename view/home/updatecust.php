<div class = "container">
    <h1>Bezoeker wijzigen</h1>
        <form name="update" method="post" action="../edit">
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Naam:</label>
        <div class="col-sm-10">
        <input type="text" name="name" placeholder = "<?= $customer['name']; ?>"><span class="text-danger"><?php echo $nameErr;?></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Leeftijd:</label>
        <div class="col-sm-10">
        <input type="text" name="adress" placeholder = "<?= $customer['adress']; ?>"><span class="text-danger"><?php echo $adressErr;?></span>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Leeftijd:</label>
        <div class="col-sm-10">
        <input type="text" name="phone" placeholder = "<?= $customer['phone']; ?>"><span class="text-danger"><?php echo $phoneErr;?></span>
        </div>
    </div>
    <input hidden name="id" value = "<?= $customer['id']; ?>">
    <input class = "btn btn-info" type="submit" value = "Aanpassen">

    </form>
</div>