<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
    <?php include 'includes/header.php' ?>
    <div class="row">

        <div class="col-sm-2">
            <div class="list-group">
                <a href="../category.php" class="list-group-item list-group-item-action">Category 1</a>
                <a href="../category.php" class="list-group-item list-group-item-action">Category 2</a>
                <a href="../category.php" class="list-group-item list-group-item-action">Category 3</a>
                <a href="../category.php" class="list-group-item list-group-item-action">Category 4</a>
                <a href="../category.php" class="list-group-item list-group-item-action">Category 5</a>
                <a href="../category.php" class="list-group-item list-group-item-action">Category 6</a>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="row">
                <div>
                    <h1>Your cart</h1>
                </div>
                <div class="col-sm-12">
                    <div class="row justify-content-between">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Number of</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Example 1</th>
                                    <td>
                                        <div class="form-group col-sm-2">
                                            <input type="number" class="form-control" name="numberOfExample1" value="1">
                                        </div>
                                    </td>
                                    <td>999</td>
                                </tr><tr>
                                    <th scope="row">Example 2</th>
                                    <td>
                                        <div class="form-group col-sm-2">
                                            <input type="number" class="form-control" name="numberOfExample2" value="1">
                                        </div>
                                    </td>
                                    <td>999</td>
                                </tr>
                                <tr>
                                    <th scope="row">Example 3</th>
                                    <td>
                                        <div class="form-group col-sm-2">
                                            <input type="number" class="form-control" name="numberOfExample3" value="1">
                                        </div>
                                    </td>
                                    <td>999</td>
                                </tr>
                                <tr>
                                    <th scope="row">Example 4</th>
                                    <td>
                                        <div class="form-group col-sm-2">
                                            <input type="number" class="form-control" name="numberOfExample4" value="1">
                                        </div>
                                    </td>
                                    <td>999</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="dropdown-divider">
                            ------------------------------------------------------------------------------------------------------
                            ------------------------------------------------------------------------------------------------------
                            -------------------------
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><button type="button" name="order" class="btn btn-primary">Order</button></th>
                    <th scope="col">Total cost</th>
                    <th scope="col">3996</th>
                </tr>
                </thead>
                </table>

            </div>
            <div class="row justify-content-between">
                <div class="dropdown-divider">
                    ------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------
                    -------------------------
                </div>
            </div>
                <div class="row">
                    <div class="row justify-content-between">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../includes/media/arrival.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">First new arrival</h5>
                                <p class="card-text">Short product description</p>
                                <a href="../goods.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../includes/media/arrival.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Second new arrival</h5>
                                <p class="card-text">Short product description</p>
                                <a href="../goods.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../includes/media/arrival.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Third new arrival</h5>
                                <p class="card-text">Short product description</p>
                                <a href="../goods.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../includes/media/arrival.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Fourth new arrival</h5>
                                <p class="card-text">Short product description</p>
                                <a href="../goods.php" class="btn btn-primary">More</a>
                            </div>
                        </div>
                    </div>
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
