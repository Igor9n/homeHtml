<?php include_once 'includes/media/goods/goods.php'; ?>
<?php header('Location: goods.php'.$_GET['id']);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $goods[$_GET['id']['name']] ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'includes/header.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <div class="list-group">
                <a href="category.php" class="list-group-item list-group-item-action">Category 1</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category 2</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category 3</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category 4</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category 5</a>
                <a href="category.php" class="list-group-item list-group-item-action">Category 6</a>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="row justify-content-between">
                <h1><?= $goods[$_GET['id']['name']] ?></h1>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <img class="card-img-top" src="includes/media/goods.jpg" alt="Card image cap">
                </div>
                <div class="col-sm-9">
                    <div class="row justify-content-between">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Characteristic</th>
                                    <th scope="col">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($corei3 as $key => $value): ?>
                                    <tr>
                                        <th scope="row"><?= $key ?></th>
                                        <td><?= $value ?></td>
                                    </tr>
                            <?php endforeach;  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="button" name="addtocart" class="btn btn-primary">Add to cart</button>
            </div>
            <div class="row justify-content-between">
                <div class="dropdown-divider">
                    ------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------
                    -------------------------
                </div>
            </div>
            <div class="row">
                <h4>Description</h4>
            </div>
            <div class="row">
                <?= $goods[$_GET['id']['description']] ?> ?>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="dropdown-divider">
            ------------------------------------------------------------------------------------------------------
            ------------------------------------------------------------------------------------------------------
            ------------------------------------------------------------------------------------------------------
        </div>
    </div>
    <div class="row">
        <h2>
            New arrivals
            <small class="text-muted">Be the first who will buy it!</small>
        </h2>
    </div>
    <div class="row justify-content-between">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="includes/media/arrival.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">First new arrival</h5>
                <p class="card-text">Short product description</p>
                <a href="goods.php" class="btn btn-primary">More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="includes/media/arrival.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Second new arrival</h5>
                <p class="card-text">Short product description</p>
                <a href="goods.php" class="btn btn-primary">More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="includes/media/arrival.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Third new arrival</h5>
                <p class="card-text">Short product description</p>
                <a href="goods.php" class="btn btn-primary">More</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="includes/media/arrival.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fourth new arrival</h5>
                <p class="card-text">Short product description</p>
                <a href="goods.php" class="btn btn-primary">More</a>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
