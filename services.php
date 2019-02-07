
<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/style.css?1549537936 /">
		<link rel="stylesheet" href="/css/style-mickey.css?1549537936 /">
		<link rel="stylesheet" href="/css/tile.css?1549537936 /">
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
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="col-md-12">
        <h1 id="heading"><strong>Services</strong></h1>
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
        <div class="container">
            <div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 1</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 2</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 3</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 4</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 5</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 6</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 7</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 8</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 14</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 15</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 16</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 17</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 18</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 19</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Service 20</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>This is the description</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>Lorem</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>Example</a>
          </div>
        </div><div class='list-group'>
          <div class='list-group-item'>
            <h4 style='font-weight: 500;' class='list-group-item-heading'>mickey-testing</h4>
            <hr style='color: #00bdaa;'>
            <a href=''class='list-group-item-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su</a>
          </div>
        </div>            </div>
    </div>
    </section>

    <section id="content">


        <a id="link" href="about-service.php?id=Service 1" class="link"><div class="col-sm-4">
                         <ul class="trigger0 tile aqua"> 
                         <h2 class="title">Service 1<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>   <a id="link" href="about-service.php?id=Service 2" class="link"><div class="col-sm-4">
                         <ul class="trigger1 tile green"> 
                         <h2 class="title">Service 2<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>   <a id="link" href="about-service.php?id=Service 3" class="link"><div class="col-sm-4">
                         <ul class="trigger2 tile aqua"> 
                         <h2 class="title">Service 3<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>   <a id="link" href="about-service.php?id=Service 4" class="link"><div class="col-sm-4">
                         <ul class="trigger3 tile red"> 
                         <h2 class="title">Service 4<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>   <a id="link" href="about-service.php?id=Service 5" class="link"><div class="col-sm-4">
                         <ul class="trigger4 tile purple"> 
                         <h2 class="title">Service 5<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>   <a id="link" href="about-service.php?id=Service 6" class="link"><div class="col-sm-4">
                         <ul class="trigger5 tile blue"> 
                         <h2 class="title">Service 6<p style="font-size: 20px;">Click to read more</p></h2></a>    </ul>
                                </div>           <style type="text/css">

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
        
            <a class="right carousel-control" href="services.php?page=2" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" style="color: black;"></span>
            <span class="sr-only">Next</span>
            </a> 
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


<!-- script for search -->
<script>
$(document).ready(function(){
 
 $('#search_text').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"./search-services2.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });


 
});


</script>