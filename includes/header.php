<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="includes/media/tech.png" width="30" height="30" alt="">
    <a class="navbar-brand" href="index.php">TechStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vacancies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="What do you need?">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>
        <div class="col-3 row justify-content-end form-inline">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Login
            </button>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-group row " method="POST">
                                <div class="form-group">
                                    <label for="email" class="col col-form-label">Your email: </label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col col-form-label">Password: </label>
                                    <input type="password" class="form-control" id="lname" placeholder="Enter your password">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
                Register
            </button>
            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerform">Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-group row " method="POST">
                                <div class="form-group">
                                    <label for="fname" class="col col-form-label">First name: </label>
                                    <input type="text" class="form-control" id="fname" placeholder="Enter first name">
                                </div>
                                <div class="form-group">
                                    <label for="lname" class="col col-form-label">Last name: </label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter last name">
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col col-form-label">Date of birth:</label>
                                    <input type="date" class="form-control" id="date" placeholder="Enter your date of birth">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col col-form-label">Email address:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col col-form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label for="cpassword" class="col col-form-label">Confirm password:</label>
                                    <input type="password" class="form-control" id="cpassword" placeholder="Enter password again">
                                </div>
                            </form>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                I agree anything you want
                            </label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="nav-link" href="cart.php">Cart</a>
        </div>
    </div>
</nav>


