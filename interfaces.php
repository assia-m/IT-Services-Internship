
<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/style.css?1549537974 /">
		<link rel="stylesheet" href="/css/style-mickey.css?1549537974 /">
		<link rel="stylesheet" href="/css/tile.css?1549537974 /">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">


		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<script src="/js/modernizr.custom.63321.js"></script>
        <script src="/js/typeahead.js"></script>
        <script src="/js/uni.js"></script>
        

        


        <title>Home</title>
	</head><nav class="navbar navbar-inverse" role="navigation">
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
                    <li> <a href="home.php">Home</a></li><li> <a href="services.php?page=1">Services</a></li><li> <a href="interfaces.php">Interfaces</a></li><li> <a href="admin/dashboard.php">Admin Dashboard</a></li>
                </ul>
            </div>

            <ul class="nav navbar-nav navbar-right">
             <li><a href=" "><span>Welcome guest</span> </a></li><li><a href="logout.php">Logout</span></a></li>            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="wrapper">
<br>
<br>
<div class="container">

    <div class="col-md-12 clearfix">
      <div class="back-btn">
             <button  onclick="goBack()" class="button"><span>Back</span></button>
        </div>
        <div class="tile-view">
            <button id="show" class="col-md-offset-1 button click"><span>List View</span></button>
        </div>
        <button id="show1" style="display: none;" class="col-md-offset-1 button click">
            <span>Tile View</span></button>
            <button id="dark-mode-services"   style="float: right;" class="button click col-md-offset-1 add-btn btn btn-3">Dark Mode</button>
            <button id="normal-mode-services" style="display: none;"  style="float: right;" class=" col-md-offset-1 add-btn btn btn-3">Normal Mode</button>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Nunito:300);

        #show
        {
          text-transform: uppercase;
          letter-spacing: 2px;
          text-align: center;
          color: #0C5;

          font-size: 24px;
          font-family: "Nunito", sans-serif;
          font-weight: 300;
          margin: 0em auto;
          background: #00bdaa;
          border: 1px solid #00bdaa;
          color: #FFF;
          overflow: hidden;
          
          transition: all 0.5s;
        }

        #show:hover, #show:active 
        {
          text-decoration: none;
          color: #0C5;
          border-color: #0C5;
          background: #FFF;
        }

        #show span 
        {
          display: inline-block;
          position: relative;
          padding-right: 0;
          
          transition: padding-right 0.5s;
        }

        #show span:after 
        {
          content: ' ';  
          position: absolute;
          top: 0;
         /* right: -18px;*/
          opacity: 0;
          width: 10px;
          height: 10px;
          

          background: rgba(0, 0, 0, 0);
          border: 3px solid #FFF;
          border-top: none;
          border-right: none;

          transition: opacity 0.5s, top 0.5s, right 0.5s;
          transform: rotate(-45deg);
        }

        #show:hover span, #show:active span 
        {
          padding-right: 30px;
        }

        #show:hover span:after, #show:active span:after 
        {
          transition: opacity 0.5s, top 0.5s, right 0.5s;
          opacity: 1;
          border-color: #0C5;
          right: 0;
          top: 50%;
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="col-md-12">
        <h1 id="heading"><strong>Interfaces</strong></h1>
    </div>
    <div class="form-box">
        <div class="row">
            <div class="col-md-12">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" name="search_text" id="search_text" class="form-control input-lg"
                               placeholder="Search"/>
                        <span class="input-group-btn">
                        <button class="btn btn-info2 btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>
                </div>
                <br>
                <div id="result"></div>
            </div>
        </div>
    </div>


    <div class="row">


        <section id="tree" style="display:none;">
            <div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Finance Interface 1</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>This shows the finance interface!</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Finance Interface 2</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>This shows the finance interface!</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Yahoo Interface 3</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>This shows the finance interface!</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Google Interface 4</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>This shows the finance interface!</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Kenos Interface</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>New</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>lol123</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>New Test</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>Test Description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Student Interface</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>Testing Again</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Testing</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>Testing Final Time</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Interface</h4>
            <hr style='color: #00bdaa;'>
            <a href='class='list-group-item-text'>Testing Navigation</a>
          </div>
        </div>    </div>
    </section>

    <section id="content">


                <style type="text/css">

            #link {
                color: #fff;
            }

            a.link:hover {
                color: white;
                text-decoration: none;
            }
        </style>
</div>
</section>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!--        Pagination Begin -->
    
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
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


<script>


    $('#show').click(function () {
        $('#tree').slideToggle(1500);
        $('#show').hide();
        $('#content').hide();
        $('#myCarousel').hide();
        $('#show1').show();
    });

    $('#show1').click(function () {
        $('#tree').hide();
        $('#content').slideToggle(1500);
        $('#show').show();
        $('#show1').hide();
        $('#myCarousel').show();

    });


</script>

<!-- script for search  -->
<script>
    $(document).ready(function () {

        $('#search_text').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "./search-interfaces.php",
                    method: "POST",
                    data: {query: query},
                    dataType: "json",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                })
            }
        });

    });
</script>