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
              <a class="navbar-brand" href="#">&nbsp;
                <iframe src="http://ghbtns.com/github-btn.html?user=Helias&repo=CSS3_Cool_Effects&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>
              </a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://raw.githubusercontent.com/Helias/CSS3_Cool_Effects/master/effects.css"><i class="fa fa-download"></i>&nbsp;Doanload All Effects</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-xs">
          <div class="hidden-sm" style="margin-top: 120px;"></div>
          <div class="enlarge" style="border: 2px solid #33a6e7; width: 425px; text-align: center;">
            <font style="padding: 10px;" size="7px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
          <font size="8">HTML:</font>
          <textarea readonly="readonly" cols="45" rows="5">

  <div class="enlarge">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="8">CSS:</font>
          <textarea readonly="readonly" cols="45" rows="9">
  /* Enlarge */
  /* The example repeat continuously the effect but the code will repeat only once */

  .enlarge {
    animation: enlarge 2s;
    -webkit-animation-name: enlarge;
    -webkit-animation-duration: 2s;
  }
  @keyframes scaling {
    from {
      -moz-transform: scale(.01);
      -o-transform: scale(.01);
      -ms-transform: scale(.01);
      transform: scale(.01);
    }
    to {
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }
  }
  @-webkit-keyframes scaling {
    0% { -webkit-transform: scale(.01); }
    100% { -webkit-transform: scale(1); }
  }</textarea>
        </div>
        <div class="visible-xs col-xs-12">
          <div class="enlarge" style="border: 2px solid #33a6e7; width: 425px; text-align: center;">
            <font style="padding: 10px;" size="7px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
          <br><br>
        </div>
        <div class="visible-xs col-xs-12">
          <font size="8">HTML:</font><br><br>
          <textarea readonly="readonly" cols="45" rows="5">

  <div class="enlarge">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="8">CSS:</font><br><br>
          <textarea readonly="readonly" cols="45" rows="9">
  /* Scaling */
  /* The example repeat continuously the effect but the code will repeat only once */

  .scaling {
    animation: scaling 2s;
    -webkit-animation-name: scaling;
    -webkit-animation-duration: 2s;
  }
  @keyframes scaling {
    from {
      -moz-transform: scale(.01);
      -o-transform: scale(.01);
      -ms-transform: scale(.01);
      transform: scale(.01);
    }
    to {
      -moz-transform: scale(1);
      -o-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }
  }
  @-webkit-keyframes scaling {
    0% { -webkit-transform: scale(.01); }
    100% { -webkit-transform: scale(1); }
  }</textarea>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
