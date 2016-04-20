
<nav class="navbar navbar-default">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!--LOGO ISSUE TO RESOLVE-->
            <a href="index.php">
                <img alt="logo" src="includes\avore.jpg" style="margin-left:-15px" height="70px" width="100px">
            </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"> <span class="sr-only">(current)</span></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoires <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Clothes</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Arts</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="search" size="50" /><span class="glyphicon glyphicon-search" aria-hidden="true" style="margin-left:-25px;"></span>
                </div>
                <button type="submit" class="btn" style="background-color:#F68B1E;color:white">SEARCH</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contactus.php">Contact US</a></li>
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Billing Info</a></li>
                        <li><a href="policies.php">Policies</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
