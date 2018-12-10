<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Category</title>
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
                                <tr>
                                    <th scope="row"># of cores</th>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">Generation</th>
                                    <td>Six</td>
                                </tr>
                                <tr>
                                    <th scope="row">Socket type</th>
                                    <td>Intel Socket 2066</td>
                                </tr>
                                <tr>
                                    <th scope="row">Integrated gpu</th>
                                    <td>No</td>
                                </tr><tr>
                                    <th scope="row">Warranty</th>
                                    <td>3 years</td>
                                </tr>
                                <tr>
                                    <th scope="row">Price</th>
                                    <td>$999</td>
                                </tr>
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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                PageMaker including versions of Lorem Ipsum.

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
