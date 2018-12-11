<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link rel="shortcut icon" href="includes/media/tech.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
            <?php include 'includes/pages/categories.php' ?>
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
            </div>
        </div>
        <?php include "includes/pages/arrivals.php"; ?>
    </div>

    <?php include 'includes/pages/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
