<?php include_once 'controllers/ItemController.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= Products::getItemInfo($_GET['item'])['name'] ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="includes/media/tech.png" type="image/x-icon">
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
            <div class="alert alert-secondary">
                <h4 class="alert-heading"><h1><?= Products::getItemInfo($_GET['item'])['name'] ?></h1></h4>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <img class="card-img-top" src="includes/media/goods/<?= $_GET['item'] ?>.jpg" alt="Card image cap">
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
                            <?php foreach (Products::getItemInfo($_GET['item'])['characteristics'] as $value): ?>
                                <tr>
                                    <th scope="row"><?= $value[0] ?></th>
                                    <td><?= $value[1] ?></td>
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
                <?= Products::getItemInfo($_GET['item'])['description'] ?>
            </div>
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
