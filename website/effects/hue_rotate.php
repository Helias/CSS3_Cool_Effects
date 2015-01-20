    <?php include "../header.php"; ?>

      <h1>&nbsp;&nbsp;Hue_Rotate</h1>
      <img class="jump" src="http://www.w3schools.com/images/incompatible_ie.gif">
      <img class="jump" src="http://www.w3schools.com/images/incompatible_firefox.gif">
      <img class="jump" src="http://www.w3schools.com/images/incompatible_opera.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_chrome.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_safari.gif">
      <br><br>
      <div class="row">
        <div class="col-md-4 hidden-xs">
          <div class="hidden-sm" style="margin-top: 120px;"></div>
          <div class="hue_rotate" style="border: 2px solid #33a6e7; width: 425px; text-align: center;">
            <font style="padding: 10px;" size="7px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
          <font size="8">HTML:</font>
          <textarea readonly="readonly" cols="50" rows="5">

  <div class="hue_rotate">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="8">CSS:</font>
          <textarea readonly="readonly" cols="50" rows="9">
  /* Hue Rotate - coded by Helias - css3.openprogrammers.it */
  /* The example repeats continuously the effect, but the code will repeat only once */

  .hue_rotate {
    -webkit-animation-name: hue_rotate;
    -webkit-animation-duration: 6s;
  }
  @-webkit-keyframes hue_rotate {
    0% { -webkit-filter: hue-rotate(0deg);}
    100% { -webkit-filter: hue-rotate(360deg); }
  }
</textarea>
        </div>
        <div class="visible-xs col-xs-12">
          <div class="hue_rotate" style="border: 2px solid #33a6e7; width: 350px; text-align: center;">
            <font style="padding: 10px;" size="6px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
          <br><br>
        </div>
        <div class="visible-xs col-xs-12">
          <font size="6">HTML:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="5">

  <div class="hue_rotate">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="6">CSS:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="9">
  /* Hue Rotate - coded by Helias - css3.openprogrammers.it */
  /* The example repeats continuously the effect, but the code will repeat only once */

  .hue_rotate {
    -webkit-animation-name: hue_rotate;
    -webkit-animation-duration: 6s;
  }
  @-webkit-keyframes hue_rotate {
    0% { -webkit-filter: hue-rotate(0deg);}
    100% { -webkit-filter: hue-rotate(360deg); }
  }
</textarea>
        </div>
      </div>
      <?php include "../footer.php"; ?>