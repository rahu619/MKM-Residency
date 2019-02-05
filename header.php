<!-- <div class="page-inner"> -->
<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><a href="home.php">MKM Residency<em>.</em></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li class="has-dropdown">
                        <a href="services.php">Amenities</a>
                        <ul class="dropdown">
                            <li><a href="#">Pool</a></li>
                            <li><a href="#">Fitness Club</a></li>
                            <li><a href="#">Snooker</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="btn-cta"><a href="booking.php"><span>Reservation</span></a></li>

                   <?php session_start();?>

                   <?php if (!isset($_SESSION["userID"])) {?>
                    <!-- Login -->
                     <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Login
                            </a>


                            <div class="dropdown-menu p-5 mx-auto">
                                <form class="form-horizontal" method="post" action="./controllers/login.php" accept-charset="UTF-8">
                                    <input class="form-control login" type="text" name="username" placeholder="Username">
                                    <input class="form-control login" type="password" name="password" placeholder="Password">
                                    <input class="btn btn-primary" type="submit" value="Login">
                                </form>
                            </div>

                        </li>


                   <?php } else {?>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="logout.php?signout=true">
                            <span class="glyphicon glyphicon-log-in"></span>
                                Log out
                            </a>
                    </li>
                   <?php }?>


                    </ul>

            </div>
        </div>

    </div>
</nav>