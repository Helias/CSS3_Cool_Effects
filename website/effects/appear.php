    <?php include "../header.php"; ?>

      <h1>&nbsp;&nbsp;Appear</h1>
      <img src="http://www.w3schools.com/images/compatible_ie.gif">
      <img src="http://www.w3schools.com/images/compatible_firefox.gif">
      <img src="http://www.w3schools.com/images/compatible_opera.gif">
      <img src="http://www.w3schools.com/images/compatible_chrome.gif">
      <img src="http://www.w3schools.com/images/compatible_safari.gif">
      <br><br>
      <div class="row">
        <div class="col-md-4 hidden-xs">
          <div class="appear" style="border: 2px solid #33a6e7; width: 425px; text-align: center;">
            <font style="padding: 10px;" size="7px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
          <font size="8">HTML:</font>
          <textarea readonly="readonly" cols="45" rows="5">

  <div class="appear">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="8">CSS:</font>
          <textarea readonly="readonly" cols="45" rows="9">
  /* Appear - coded by Helias - css3.openprogrammers.it */
  /* The example repeat continuously the effect but the code will repeat only once */

  .appear {
    animation: appear 2s;
    -webkit-animation-name: appear;
    -webkit-animation-duration: 2s;
  }
  @keyframes appear {
    from { opacity:0.1; }
    50% { opacity: 0.3; }
    to { opacity: 1; }
    }
  @-webkit-keyframes appear {
    0% { opacity: 0.1; }
    50% { opacity: 0.3; }
    100% { opacity: 1; }
  }
</textarea>
        </div>
        <div class="visible-xs col-xs-12">
          <div class="appear" style="border: 2px solid #33a6e7; width: 350px; text-align: center;">
            <font style="padding: 10px;" size="6px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
          <br><br>
        </div>
        <div class="visible-xs col-xs-12">
          <font size="6">HTML:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="5">

  <div class="appear">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="6">CSS:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="9">
  /* Appear - coded by Helias - css3.openprogrammers.it */
  /* The example repeat continuously the effect but the code will repeat only once */

  .appear {
    animation: appear 2s;
    -webkit-animation-name: appear;
    -webkit-animation-duration: 4s;
  }
  @keyframes appear {
    from { opacity:0.1; }
    50% { opacity: 0.3; }
    to { opacity: 1; }
  }
  @-webkit-keyframes appear {
    0% { opacity: 0.1; }
    50% { opacity: 0.3; }
    100% { opacity: 1; }
  }
</textarea>
        </div>
      </div>
      //~ <?php include "../footer.php"; ?>