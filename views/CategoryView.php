<?php
include_once 'includes/content/goods.php';
include_once 'controllers/ItemController.php';
include_once 'controllers/CategoryController.php';

$count_cats = 0;

foreach (Products::getAll() as $value)
{
    if ($value['catid']===$_GET['category'])
    {
        $count_cats++;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Goods</title>
    <link rel="shortcut icon" href="../includes/media/tech.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'includes/pages/header.php' ?>
<div class="dropdown-divider">
    ------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------
    ---------------------------
</div>
<div class="container-fluid">
    <div class="row">
        <?php include 'includes/pages/categories.php'; ?>
        <div class="col-sm-10">
            <?php if ($_GET['category']==='all'): ?>
                <div class="alert alert-secondary">
                    <h4 class="alert-heading">All items we have.</h4>
                    <p class="mb-0">Here's everything you need!</p>
                </div>
                <div class="row">
                    <?php foreach (array_reverse(Products::getAll()) as $value): ?>
                        <div class="card col-sm-3" style="width: 15rem;" style="height: 15rem;">
                            <img width="140" height="250" class="card-img-top" src="includes/media/goods/<?= $value['id'] ?>.jpg" alt="Card image cap">
                            <div class="card-footer">
                                <h5 class="card-title"><b><?= $value['name'];?></b></h5>
                                <p class="card-text"><?= $value['shortDesc'];?></p>
                                <form>
                                    <button type="submit" name="item" value="<?=$value['id']?>" class="btn btn-primary">More</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <?php if ($count_cats): ?>
                    <div class="alert alert-secondary">
                        <h4 class="alert-heading">Our <?= strtolower(Categories::getCatName($_GET['category'])); ?></h4>
                        <p class="mb-0">Here's everything you need!</p>
                    </div>
                    <div class="row">
                        <?php foreach (Products::getAll() as $value): ?>
                            <?php if($value['catid'] === $_GET['category']): ?>
                                <div class="card col-sm-3" style="width: 15rem;" style="height: 15rem;">
                                    <img width="140" height="250" class="card-img-top" src="includes/media/goods/<?= $value['id'] ?>.jpg" alt="Card image cap">
                                    <div class="card-footer">
                                        <h5 class="card-title"><b><?= $value['name'];?></b></h5>
                                        <p class="card-text"><?= $value['shortDesc'];?></p>
                                        <form>
                                            <button type="submit" name="item" value="<?=$value['id']?>" class="btn btn-primary">More</button>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <h4 class="alert-heading">So sorry, all <?= strtolower(Cats::$categories[$_GET['category']]['name']) ?> has been already sold!</h4>
                        <p class="mb-0">Visit us later.</p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php include 'includes/pages/arrivals.php'; ?>
</div>

<?php include 'includes/pages/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
