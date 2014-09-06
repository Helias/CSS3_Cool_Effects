<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS3 Cool Effects</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/effects.css" rel="stylesheet">
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
            <a class="navbar-brand" href="home.php">CSS3 Cool Effects</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Effects <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="all.php">All</a></li>
                  <li><a href="images.php">Images</a></li>
                  <li><a href="random.php">Random</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://raw.githubusercontent.com/Helias/CSS3_Cool_Effects/master/effects.css"><i class="fa fa-download"></i>&nbsp;Download All Effects</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>

      </div>
    <br><br>
    <div class="container">

      <div class="row lightbord">

        <div class="col-md-3 col-sm-6">
          <div>
            <h2 align="center">Show</h2>
          </div>
          <div attribute="show">
            <div style="border: 2px solid #33a6e7; width: 100%; text-align: center;">
              <font style="padding: 0px;" size="5px" color="#33a6e7">CSS3 Cool Effects</font>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div>
            <h2 align="center">Target</h2>
          </div>
          <div attribute="target">
            <div class="target" style="border: 2px solid #33a6e7; width: 100%; text-align: center;">
              <font style="padding: 7px;" size="5px" color="#33a6e7">CSS3 Cool Effects</font>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div>
            <h2 align="center">Radius</h2>
          </div>
          <div attribute="radius">
            <div class="radius" style="border: 2px solid #33a6e7; width: 100%; text-align: center;">
              <font style="padding: 7px;" size="5px" color="#33a6e7">CSS3 Cool Effects</font>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div>
            <h2 align="center">Radius2</h2>
          </div>
          <div attribute="radius2">
            <div class="radius2" style="border: 2px solid #33a6e7; width: 100%; text-align: center;">
              <font style="padding: 7px;" size="5px" color="#33a6e7">CSS3 Cool Effects</font>
            </div>
          </div>
        </div>

      </div>

      <hr>
      <div class="row">
        <div class="col-xs-3 col-lg-offset-1">
          <h2>Star</h2>
          <iframe src="http://ghbtns.com/github-btn.html?user=Helias&amp;repo=CSS3_Cool_Effects&amp;type=watch&amp;size=large" allowtransparency="true" scrolling="0" frameborder="0"></iframe>
        </div>
        <div class="col-xs-3">
          <h2>Fork</h2>
          <iframe src="http://ghbtns.com/github-btn.html?user=Helias&amp;repo=CSS3_Cool_Effects&amp;type=fork&amp;size=large" allowtransparency="true" scrolling="0" frameborder="0"></iframe>
        </div>
        <div class="col-xs-3" >
          <h2>Follow</h2>
          <iframe src="http://ghbtns.com/github-btn.html?user=Helias&amp;type=follow&amp;size=large" allowtransparency="true" scrolling="0" frameborder="0"></iframe>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("div").each(function () {
      if($(this).attr("attribute"))
      {
        $(this).click(function ()
          {
            location.href='effects/'+$(this).attr("attribute")+'.php'; });
          if(!$("div", this).hasClass($(this).attr("attribute"))) {
            $(this).hover(function () { $("div", this).toggleClass($(this).attr("attribute")); } );
          }
      }
    });
    </script>
  </body>
</html>