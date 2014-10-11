    <?php include "../header.php"; ?>

      <h1>&nbsp;&nbsp;ShowOver</h1>
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
		  <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" class="img-responsive">
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
		  <img src="../images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%" >
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
              <img src="../images/CSS3.jpg" alt="CSS3 Cool Effects" class="img-responsive">
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
		  <img src="http://shinworld.altervista.org/CSS3_Cool_Effects/images/CSS3.jpg" alt="CSS3 Cool Effects" width="100%" height="100%">
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