<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS3 Cool Effects</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/effects.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">

        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../home.php">CSS3 Cool Effects</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Effects <b class="caret"></b></a>
                <?php include "effects-dropdown-menu.php"; ?>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://raw.githubusercontent.com/Helias/CSS3_Cool_Effects/master/effects.css"><i class="fa fa-Download"></i>&nbsp;Download All Effects</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </div>
    <br><br>
    <div class="container">
      <img src="http://www.w3schools.com/images/compatible_ie.gif">
      <img src="http://www.w3schools.com/images/compatible_firefox.gif">
      <img src="http://www.w3schools.com/images/compatible_opera.gif">
      <img src="http://www.w3schools.com/images/compatible_chrome.gif">
      <img src="http://www.w3schools.com/images/compatible_safari.gif">
      <br><br>
      <div class="row">
        <div class="col-md-4 hidden-xs">
          <div class="hidden-sm" style="margin-top: 120px;"></div>
          <div class="showoverbox">
            <div class="showover text-center">
		<div class="text-center" style="height: 210px; width: 250px; overflow: hidden;">
		  <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects">
		</div>
	      <br>
                <button class="btn btn-primary btn-lg">Button</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
          <font size="8">HTML:</font>
          <textarea readonly="readonly" cols="45" rows="5">
	  <div class="showoverbox">
            <div class="showover text-center">
		<div class="text-center" style="height: 210px; width: 250px; overflow: hidden;">
		  <img src="../images/CSS3.jpg" alt="CSS3 Cool Effects" class="img-responsive">
		</div>
	      <br>
                <button class="btn btn-primary btn-lg">Button</button>
            </div>
          </div>
          </textarea>
          <br>
          <font size="8">CSS:</font>
          <textarea readonly="readonly" cols="45" rows="9">
  /* ShowOver - coded by Helias - css3.openprogrammers.it */
.showoverbox, .showoverbox:hover, .showover, showover:hover {
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}

.showoverbox {
  height: 420px;
  width: 275px;
}

.showover {
  margin: auto;
  border: 10px solid #ededed;
  padding: 10px 0px 0px 0px;
  width: 100%;
}

.showover div {
  width: 100%;
  height: 100%;
}

@media (min-width:801px) {
  .showover {
    overflow: hidden;
    height: 235px;
    opacity: 0.5;
  }
  
  .showover:hover {
    height: 320px;
    opacity: 1; 
  }
}</textarea>
        </div>
        <div class="visible-xs col-xs-12">
          <div class="showoverbox">
            <div class="showover text-center">
              <img src="../images/CSS3.jpg" alt="CSS3 Cool Effects">
              <br><br>
              <button class="btn btn-primary btn-lg">Button</button>
            </div>
          </div>
        </div>
        <div class="visible-xs col-xs-12">
          <font size="6">HTML:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="5">
	  <div class="showoverbox">
            <div class="showover text-center">
		<div class="text-center" style="height: 210px; width: 250px; overflow: hidden;">
		  <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects">
		</div>
	      <br>
                <button class="btn btn-primary btn-lg">Button</button>
            </div>
          </div>
    </div>
</textarea>
          <br>
          <font size="6">CSS:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="9">
/* ShowOver - coded by Helias - css3.openprogrammers.it */
.showoverbox, .showoverbox:hover, .showover, showover:hover {
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}

.showoverbox {
  height: 420px;
  width: 275px;
}

.showover {
  margin: auto;
  border: 10px solid #ededed;
  padding: 10px 0px 0px 0px;
  width: 100%;
}

.showover div {
  width: 100%;
  height: 100%;
}

@media (min-width:801px) {
  .showover {
    overflow: hidden;
    height: 235px;
    opacity: 0.5;
  }
  
  .showover:hover {
    height: 320px;
    opacity: 1; 
  }
}
</textarea>
        </div>
      </div>
      <?php include "../footer.php"; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>