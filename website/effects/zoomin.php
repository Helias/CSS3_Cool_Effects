<?php include "../header.php"; ?>

<h1>&nbsp;&nbsp;Zoomin</h1>
<img class="jump" src="http://www.w3schools.com/images/compatible_ie.gif">
<img class="jump" src="http://www.w3schools.com/images/compatible_firefox.gif">
<img class="jump" src="http://www.w3schools.com/images/compatible_opera.gif">
<img class="jump" src="http://www.w3schools.com/images/compatible_chrome.gif">
<img class="jump" src="http://www.w3schools.com/images/compatible_safari.gif">
<br><br>
<div class="row">
  <div class="col-md-4 hidden-xs">
    <div class="hidden-sm" style="margin-top: 120px;"></div>
    <div class="zoominbox">
      <div class="zoomin text-center">
        <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%" >
        <h2 style="color: #33a6e7;">CSS3</h2>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
    <font size="8">HTML:</font>
    <textarea readonly="readonly" cols="45" rows="5">
      <div class="zoominbox">
        <div class="zoomin text-center">
          <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%" >
          <h2 style="color: #33a6e7;">CSS3</h2>
        </div>
      </div>
    </textarea>
    <br>
    <font size="8">CSS:</font>
    <textarea readonly="readonly" cols="45" rows="9">
/* zoomin - coded by Helias - css3.openprogrammers.it */
.zoominbox, .zoominbox:hover, .zoomin, zoomin:hover, .zoomin:hover *, .zoomin * {
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  -ms-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.zoominbox {
  height: 250px;
  width: 275px;
}
.zoomin {
  border: 10px solid #ededed;
  overflow: hidden;
  height: 210px;
  opacity: 0.6;
}
.zoomin:hover {
  opacity: 1; 
}
.zoomin:hover h2 {
  margin-top: -40px;
  opacity: 1; 
  left: 0px;
}
.zoomin:hover img {
  -moz-transform: scale1.2);
  -o-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(1.2);
}
.zoominbox h2 {
  background-color: white;
  width: 100px;
  left: -100px;
  position: relative;
}
</textarea>
  </div>
  <div class="visible-xs col-xs-12">
     <div class="zoominbox">
      <div class="zoomin text-center">
        <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%" >
        <h2 style="color: #33a6e7;">CSS3</h2>
      </div>
    </div>
  </div>
  <div class="visible-xs col-xs-12">
    <font size="6">HTML:</font><br><br>
    <textarea readonly="readonly" cols="40" rows="5">
      <div class="zoominbox">
        <div class="zoomin text-center">
          <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%" >
          <h2 style="color: #33a6e7;">CSS3</h2>
        </div>
      </div>
    </textarea>
  <br>
  <font size="6">CSS:</font><br><br>
  <textarea readonly="readonly" cols="40" rows="9">
/* zoomin - coded by Helias - css3.openprogrammers.it */
.zoominbox, .zoominbox:hover, .zoomin, zoomin:hover, .zoomin:hover *, .zoomin * {
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  -ms-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.zoominbox {
  height: 250px;
  width: 275px;
}
.zoomin {
  border: 10px solid #ededed;
  overflow: hidden;
  height: 210px;
  opacity: 0.6;
}
.zoomin:hover {
  opacity: 1; 
}
.zoomin:hover h2 {
  margin-top: -40px;
  opacity: 1; 
  left: 0px;
}
.zoomin:hover img {
  -moz-transform: scale1.2);
  -o-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(1.2);
}
.zoominbox h2 {
  background-color: white;
  width: 100px;
  left: -100px;
  position: relative;
}
</textarea>
    </div>
  </div>
</div>
<?php include "../footer.php"; ?>