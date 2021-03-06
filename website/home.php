<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS3 Cool Effects</title>

    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="../effects.css" rel="stylesheet">
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

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12 presentationbox">
          <div class="presentation">
            <h1 align="center" class="presentationbox"><span class="hidden-xs">Free</span> CSS3 Cool Effects</h1>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <br><br><br>
          <center style="height: 75px;">
            <div id="text" style="border: 2px solid #33a6e7; width: 300px;">
              <font style="padding: 10px;" size="6" color="#33a6e7">CSS3 Cool Effects</font>
            </div>
          </center>
          <br><br>
        </div>
      </div>

    </div>

    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4">
          <h3><span class="glyphicon glyphicon-file"></span> Easy to Install</h3>
          <p>Simply download a CSS file and use the classes of the effects.</p>
        </div>
        <div class="col-lg-4 col-sm-4">
          <h3><span class="fa fa-github"></span> Open Source</h3>
          <p>CSS3 Cool Effects are released under the GNU-GPL License and maintained by the community on <a target="_blank" href="https://github.com/Helias/CSS3_Cool_Effects">GitHub</a>.</p>
        </div>
        <div class="col-lg-4 col-sm-4">
          <h3><span class="fa fa-laptop"></span> Almost all effects supports all most common browsers.</p>
          <center><img src="http://www.w3schools.com/images/compatible_ie.gif">
            <img src="http://www.w3schools.com/images/compatible_firefox.gif">
            <img src="http://www.w3schools.com/images/compatible_opera.gif">
            <img src="http://www.w3schools.com/images/compatible_chrome.gif">
            <img src="http://www.w3schools.com/images/compatible_safari.gif"></center>
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
    <script type="text/javascript">
      var save ="";
      var effect = new Array();
      effect[0] = "radius";
      effect[1] = "radius2";
      effect[2] = "scaling";
      effect[3] = "reduction";
      effect[4] = "appear";
      effect[5] = "target";
      effect[6] = "enlarge";
      effect[7] = "show";

      function change_effect()
      {
        var r = Math.round(Math.random()*8);
        if (r == save) { change_effect(); }
        else { document.getElementById("text").className = effect[r]; save = r; }
      }
      setInterval("change_effect();", 3000);
    </script>
  </body>
</html>
