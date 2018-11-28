
<nav class="navbar navbar-default" style="background: #ffcc80">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ALL</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <?php
                include 'config/public_config.php';
                $pp=new PublicConfig();
                $p=$pp->getCategories();
                foreach($p as $cat):
                    ?>
                    <li><a href="index.php?cat_id=<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></a> </li>
                <?php
                endforeach;
                ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>