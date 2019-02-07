
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?1549537376 /">
    <link rel="stylesheet" href="css/style-mickey.css?1549537376 /">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

</head>
<body>

<div class="wrapper">
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container main-nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="" src="./img/uel.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <div class="col-md-offset-2 nav-links">
                <ul class="nav navbar-nav">
                    
                </ul>
            </div>

            <ul class="nav navbar-nav navbar-right">
             <!-- ?php
                include 'auth.php';
                if ($_SESSION['username'] == true) {
                    echo '<li><a href=" "><span>Welcome '. $_SESSION["username"] . '</span> </a></li>';
                    echo '<li><a href="logout.php">Logout</span></a></li>';
                } else {
                    echo '<li><a href="registerform.html"><span class="glyphicon glyphicon-log-in>Login/Register</span></a></li>';
                }
                ?> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>




    <section>
    <div class="container">
        <div class="login-page">
            <div class="form">
                <form action="" class="login-form" method="POST">
                    <input type="text" name="username" placeholder="username"/>
                    <input type="password" name="password" placeholder="password"/>
                    <button type="submit">login</button>
                    <p class="message">Forgot Password? <a href="#">Click here</a></p>
                </form>

                <!--forget password begin -->
                <form action="welcome.php" method="POST" class="register-form">
                    <input type="text" name="email" placeholder="email address"/>
                    <button type="submit">Submit</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <!--forget password end -->
            </div>
        </div>
        </div>
    </section>
</div>
<section class="main_footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">
                <div class=" col-sm-2">
                    <img src="img/docklandsCampus.jpg" alt="..." class="img-circle uel">
                </div>
                <div class="col-sm-2 campus">
                    <h4>Docklands</h4>
                    <ul class="uni_list">
                        <li>
                            University Way
                        </li>
                        <li>
                            London E16 2RD
                        </li>
                        <li>
                            United Kingdom
                        </li>
                    </ul>
                </div>
                <div class=" col-sm-2 section">
                    <img src="img/stratfordCampus.jpg" alt="..." class="img-circle uel">
                </div>
                <div class="col-sm-2 campus">
                    <h4>Stratford</h4>
                    <ul class="uni_list">
                        <li>
                            Water Lane
                        </li>
                        <li>
                            London E15 4LZ
                        </li>
                        <li>
                            United Kingdom
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 section">
                    <img src="img/universitySquare.jpg" alt="..." class="img-circle uel">
                </div>
                <div class="col-sm-2 campus">
                    <h4>University Square</h4>
                    <ul class="uni_list">
                        <li>
                            1 Salway Road
                        </li>
                        <li>
                            London E15 1NF
                        </li>
                        <li>
                            United Kingdom
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-narrow-wrapper">
    <div class="container campus">
        <div class="row">
            <div class="col-sm-2 info">
                <h4 class="footer-info">University of East London</h4>
                <ul style="list-style-type: none; text-align: left;" >
                    <li>
                        University Way
                    </li>
                    <li>
                        London, E16 2RD
                    </li>
                    <li>
                        United Kingdom
                    </li>
                </ul>
                <ul style="list-style-type: none; text-align: left;" class="">
                    <li>
                        T. +44 (0)20 8223 3000
                    </li>
                    <li>
                        T. +44 (0)20 8223 3333
                    </li>
                    <li>
                        Email itservices@uel.ac.uk
                    </li>
                    <!-- <li>
                        Contact Hours:
                         Monday - Friday: 08:00 - 18:00
                         Saturday & Sunday: Closed
                    </li> -->
                </ul>
            </div>
            <div class="col-sm-2-offset-4 info">
                <ul class="footer-links">
                    <li>
                        Home
                    </li>
                    <li>
                        About
                    </li>
                    <li>
                        Contact
                    </li>
                    <li>
                        Services
                    </li>
                    <li>
                        Dashboard
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>

</section>




<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright © 2017 University of East London </p>
    </div>
</footer></body>
</html>