    <?php include "../header.php"; ?>

      <h1>&nbsp;&nbsp;3D Button</h1>
      <img class="jump" src="http://www.w3schools.com/images/compatible_ie.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_firefox.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_opera.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_chrome.gif">
      <img class="jump" src="http://www.w3schools.com/images/compatible_safari.gif">
      <br><br>
      <div class="row">
        <div class="col-md-4 hidden-xs">
          <div class="hidden-sm" style="margin-top: 120px;"></div>
          <div class="button3d" style="border: 2px solid #33a6e7; width: 425px; text-align: center;">
            <font style="padding: 10px;" size="7px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 hidden-xs">
          <font size="8">HTML:</font>
          <textarea readonly="readonly" cols="45" rows="5">

  <div class="button3d">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="8">CSS:</font>
          <textarea readonly="readonly" cols="45" rows="9">
  /* Show - coded by Helias - css3.openprogrammers.it */
  /* The example repeat continuously the effect but the code will repeat only once */

  .show, .show * {
    left: 0;
    height: 75px;
    animation: show 2s;
    -webkit-animation-name: show;
    -webkit-animation-duration: 2s;
  }
  @keyframes show {
    from { opacity: 0.1; width: 0; font-size: 1px;}
    30% { font-size: 1px; }
    to { opacity: 1; }
  }
  @-webkit-keyframes show {
    0% { opacity: 0.1; width: 0; }
    30% { font-size: 1px; }
    100% { opacity: 1; }
  }</textarea>
        </div>
        <div class="visible-xs col-xs-12">
          <div class="button3d" style="border: 2px solid #33a6e7; width: 350px; text-align: center;">
            <font style="padding: 10px;" size="6px" color="#33a6e7">CSS3 Cool Effects</font>
          </div>
          <br><br>
        </div>
        <div class="visible-xs col-xs-12">
          <font size="6">HTML:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="5">

  <div class="button3d">
    CSS3 Cool Effects
  </div>
</textarea>
          <br>
          <font size="6">CSS:</font><br><br>
          <textarea readonly="readonly" cols="40" rows="9">
  /* Show - coded by Helias - css3.openprogrammers.it */
  /* The example repeat continuously the effect but the code will repeat only once */

  .show, .show * {
    left: 0;
    height: 75px;
    animation: show 2s;
    -webkit-animation-name: show;
    -webkit-animation-duration: 2s;
  }
  @keyframes show {
    from { opacity: 0.1; width: 0; font-size: 1px;}
    30% { font-size: 1px; }
    to { opacity: 1; }
  }
  @-webkit-keyframes show {
    0% { opacity: 0.1; width: 0; }
    30% { font-size: 1px; }
    100% { opacity: 1; }
  }</textarea>
        </div>
      </div>
      <?php include "../footer.php"; ?>