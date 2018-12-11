<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="css/productList.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include_once('layouts/header.php');?>
<div class="wrapper">
<main class="content pb-4">
        <div class="container cart-filter">
            <div class="row">
                <div class="col-4 col-sm-10">Shop by Category</div>
                <div class="w-100"></div>
                <nav class="navbar navbar-light bg-light justify-conten-between">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown9" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Departments
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Cellphone Accessories</a>
                                    <a class="dropdown-item" href="#">No-Contact Phones</a>
                                    <a class="dropdown-item" href="#">Shop Phones by Operating System</a>
                                    <a class="dropdown-item" href="#">Refurbished Phones</a>
                                    <a class="dropdown-item" href="#">Unlocked Phones</a>
                                    <a class="dropdown-item" href="#">iPhones</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shoping & Pick Up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Brand
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Price
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Color
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Memory
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                    <a class="dropdown-item" href="#">lorem</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Smart Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Works with Google</a>
                                    <a class="dropdown-item" href="#">Cameras & Security</a>
                                    <a class="dropdown-item" href="#">Smart Energy & Lighting</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Printers & Ink
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Printers</a>
                                    <a class="dropdown-item" href="#">Printer Ink</a>
                                    <a class="dropdown-item" href="#">Printer Toner</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Retailer
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Firtness Tracker</a>
                                    <a class="dropdown-item" href="#">Aplle Watch</a>
                                    <a class="dropdown-item" href="#">Samsung Gear</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Screen Size
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Xbox</a>
                                    <a class="dropdown-item" href="#">PS4</a>
                                    <a class="dropdown-item" href="#">Nintendo Switch</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        <div class="container justify-content-end products">
            <div class="row mt-4">
            <div class="col-sm">
                <div class="row">
                    <a href="product.php">
                    <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                    <div class="w-100"></div>
                    <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                    <div class="w-100"></div>
                    <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                    <div class="w-100"></div>
                    <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                    </a>
                </div>
            </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
        </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <a href="product.php">
                            <img src="//i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnWidth=282&odnHeight=282&odnBg=ffffff">
                            <div class="w-100"></div>
                            <div class="col-4 col-sm-10">Samsung Galaxy J7 Crown Prepaid Smartphone (Limit 2) </div>
                            <div class="w-100"></div>
                            <div class="price col-6 col-sm-3 mt-2">$79,99</div>
                            <div class="w-100"></div>
                            <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to cart</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include_once('layouts/footer.php');?>
</div>
</body>
</html>