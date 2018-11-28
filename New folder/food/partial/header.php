
<nav class="navbar navbar-default" style="background: saddlebrown;color: white;">
    <div class="container-fluid" style="color: white;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="color:white;">Food & Beverage Shop
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                session_start();
                $totalqty=0;
                foreach ($_SESSION['cat'] as $id=>$qty):
                    $totalqty +=$qty;
                endforeach;
                ?>
                <li> <a href="../../cat.php"><i class="fa fa-shopping-cart"></i>  <span class="badge"> <?php echo $totalqty; ?></span></a>  </li>
            </ul>
            <form class="navbar-form navbar-left" action="/" method="get">
                <div class="form-group">
                    <input type="search" name="q" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default glyphicon glyphicon-search" ></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php
                session_start();
                if($_SESSION['login'])
                {
                    ?>
                    <li><a href="../../order.php" style="color:white;">Orders</a> </li>
                    <li><a href="../../admin/dashboard.php" style="color:white;"><i class="fa fa-dashboard">Dashboard</i> </a> </li>
                    <li><a href="../../admin/categories.php" style="color:white;"><i class="fa fa-list">Categories</i> </a> </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><?php echo $_SESSION['name']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li> <a href="../../auth/logout.php"><i class="fa fa-sign-out">Logout</i></a> </li>
                    </ul>
                    </li>

                <?php
                }else{
                    ?>
                    <li> <a href="../../auth/login.php" style="color:white;"><i class="fa fa-sign-in">Login</i></a> </li>
                    <li> <a href="../../auth/regsiter.php" style="color:white;"><i class="fa fa-user-plus">Register</i></a> </li>
                    <?php
                }
                ?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>