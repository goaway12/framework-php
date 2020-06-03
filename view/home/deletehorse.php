<div class = "container">
    <h1> Paard of pony verwijderen </h1>

    <p><span>Weet je zeker dat je <?= $horse['name']; ?> wilt verwijderen?</span></p>

    <div> 
        <a href= "<?= URL ?>home/index" class  = "btn btn-info">Nee</a>
        <a href= "<?= URL ?>home/destroyhorse/<?= $horse['id']; ?>" class = "btn btn-danger">Ja</a>
    </div>
</div>