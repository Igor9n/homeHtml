<?php include 'includes/content/goods.php'; ?>
<?php $count_arrivals = 0; ?>
<div class="col-sm-12";>
    <div class="row justify-content-between">
        <div class="dropdown-divider">
            ------------------------------------------------------------------------------------------------------
            ------------------------------------------------------------------------------------------------------
            ------------------------------------------------------------------------------------------------------
        </div>
    </div>
    <div class="jumbotron">
        <h1 class="display-3">Hello, visitor!</h1>
        <p class="lead">Have time to buy the components you are interested right now.</p>
        <hr class="my-4">
        <p>We offer the best prices for the best quality.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="../category.php?id=all" role="button">Learn more</a>
        </p>
    </div>
    <div class="row justify-content-between">
        <?php foreach (array_reverse($goods) as $value): ?>
            <?php if ($count_arrivals==5) break; ?>
            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <img class="card-img-top" src="includes/media/goods/<?= $value['id'];?>.jpg" alt="Card image cap">
                    <div class="card-footer">
                        <h5 class="card-title"><b><?= $value['name'];?></b></h5>
                        <p class="card-text"><?= $value['shortDesc'];?></p>
                        <a href="../item.php?id=<?= $value['id'];?>" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <?php $count_arrivals++?>
        <?php endforeach; ?>
    </div>
</div>