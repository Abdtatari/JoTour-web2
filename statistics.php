<?php
    if(!($_POST['Loggedin']=="Success")){
        header("Location: 405-Not-Allowed-Template-2.html");
        die();
    }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="JoTour">
    <meta name="description" content="">
    <title>statistics</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="statistics.css" media="screen">
        <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "JoTour",
		"logo": "images/logo.png"
}</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="googleChartScripts.js"></script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="statistics">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-c67f"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="Home.html" style="padding: 10px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="Login.php" style="padding: 10px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-palette-2-base" href="Team.html" style="padding: 10px;">Team</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Team.html">Team</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="512" data-image-height="512">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <h1 class="u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-default u-title u-text-1">JoTour</h1>
      </div></header>
     <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-6ba3">
      <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-layout-cell u-right-cell u-size-60 u-white u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h5 class="u-text u-text-1"> App usage in all time&nbsp;</h5>
                <div class="u-container-align-center u-container-style  u-group u-group-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-2" id="curve_chart"  style="width:70rem; height: 35rem"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <hr>
    <section class="u-clearfix u-section-2" id="sec-df7a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h5 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1">Tours visited</h5>
                <div class="u-container-style u-expanded-width  u-group u-group-1">
                  <div class="u-container-layout u-container-layout-2" id="donutchart"></div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h5 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-2">Artifact scanned</h5>
                <div class="u-container-style u-expanded-width u-group u-group-2">
                  <div class="u-container-layout u-container-layout-4" id="donutchart2"></div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <h5 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-3">Place searched</h5>
                <div class="u-container-style u-expanded-width u-group u-group-3">
                  <div class="u-container-layout u-container-layout-6" id="donutchart3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <hr>
      <section class="u-align-center u-clearfix u-grey-5 u-section-3" id="sec-5179">
      <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-container-style u-layout-cell u-right-cell u-size-60 u-white u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h5 class="u-text u-text-1">Tourism item accoring to year</h5>
                <div class="u-container-align-center u-container-style u-group u-group-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-2" id="columnchart_material" style={height:100%;width:100%;}></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b7f2"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">JoTour​Ⓒ 2022 JORDAN, All rights reserved&nbsp;</p>
      </div></footer>
  

</body></html>
