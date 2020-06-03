<div class = "container">
    <h1> Bezoeker verwijderen </h1>

    <p><span>Weet je zeker dat je <?= $customer['name']; ?> wilt verwijderen?</span></p>

    <div> 
        <a href= "<?= URL ?>home/createcust" class  = "btn btn-info">Nee</a>
        <a href= "<?= URL ?>home/destroycust/<?= $customer['id']; ?>" class = "btn btn-danger">Ja</a>
    </div>
</div>