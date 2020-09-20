<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ICAR-CTRI</title>

  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">	
  <link rel="stylesheet" type="text/css" href="css/video-js.css"> 
  <link rel="stylesheet" type="text/css" href="css/lightgallery.css"> 

</head>
<body>

<?php ini_set('display_errors', 'Off'); ?>

<div class="container-fluid">
<div class="row" id="header" style="margin-bottom: 0px;#ff6600 inset;">
  <div class="col-md-1 logo" ><a href="index.php"><img src="images/icaradd.GIF"></a></div>
  <div class="col-md-10" style="color: #1D3491;"><h2>ICAR-CENTRAL TOBACCO RESEARCH INSTITUTE </h2> <h2>Rajahmundry-533105, Andhra Pradesh </h2>
 <h2>Sophisticated Analytical Instrument Facility</h2> </div>

 
 <div class="col-md-1 logo"><img style="width: 100%" src="images/LOGO1.png"></div> 
 
 

      

  
  
</div>
 </div>
  
</div>
</div>
<div class="row" style="background-color: #1D7DC3; border: none;margin-bottom: 5px; border-radius: 3px;">
<nav class="navbar navbar-default col-md-12" style="background-color: #1D7DC3; border: none;margin-bottom: 5px; border-radius: 5px;">
  <ul class="nav navbar-nav">
  
    <li class="dropdown">
          <a href="index.php" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="4" face="Charcoal" color="#ffffff">Home</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
      </li>
          
          
    </li>
    <li class="dropdown">
          <a href="services.php" ><font size="4" face="Charcoal" color="#ffffff">Sevices</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
      </li>
     <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font size="4" face="Charcoal" color="#ffffff">People</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></a>
              <ul class="dropdown-menu">                        
                        <li><a tabindex="-1" href="successstories.php">Dr.D.Damodar Reddy</a></li>
                         <li><a tabindex="-1" href="successstories2.php" target="new">Dr. S. Kasturi Krishna</a></li>
                         <li><a tabindex="-1" href="successstories3.php">Dr. C. Chandrasekhara Rao</a></li>
                         <li><a tabindex="-1" href="successstories4.php">Dr. (Mrs.) K. Sarala</a></li> 
                          <li><a tabindex="-1" href="successstories5.php">Dr. U. Sreedhar</a></li>
                                                    
                     </ul>
                  </li>
                   <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font size="4" face="Charcoal" color="#ffffff">Facilities</font>&nbsp&nbsp&nbsp&nbsp</a>
          
              <ul class="dropdown-menu">                        
                        <li><a tabindex="-1" href="rti.php" target="new">Auto-Analyser</a></li>
                         <li><a tabindex="-1" href="2.php">Smoke Machine</a></li>
                         <li><a tabindex="-1" href="3.php" target="new">Gas Chromatograph Mass Spectrometry</a></li>
                         <li><a tabindex="-1" href="4 - .php" target="new">High Performance Liquid Chromatograph</a></li> 
                          <li><a tabindex="-1" href="5 .php">Atomic Absorption Spectrophotometer</a></li>
                         <li><a tabindex="-1" href="6 .php">Total Organic Carbon Analyser
</a></li>
<li><a tabindex="-1" href="7.php">Spectro Photometer</a></li>
  <li><a tabindex="-1" href="8.php">Master Cycler</a></li>
   <li><a tabindex="-1" href="9.php">Centrifuge (Table top)</a></li>
    <li><a tabindex="-1" href="10.php">Ultra Centrifuge</a></li>
          <li><a tabindex="-1" href="12.php">Vaccum Concentrator</a></li>
 <li><a tabindex="-1" href="13.php">pH meter</a></li>
                     </ul>
                  </li>

                 
    
                
            
        
          <li class="dropdown">
          <a href="contact us.php" ><font size="4" face="Charcoal" color="#ffffff">Contact Us</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
      </li>
      </ul>
</nav>

</div>

<script src="js/jquery-3.2.1.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
<script src="js/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
<script src="js/video.js" type="text/javascript"></script>
<script src="js/lightgallery.js" type="text/javascript"></script>




<script type="text/javascript">


    $(function () { 
    $(".news_scroll").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
      pauseOnHover: true,
      navigation: false,
            direction: 'up',
            animationSpeed: 'normal',
            newsTickerInterval: 4000,
            onToDo: function () {                
            }
        });        
    });

$(document).ready(function(){
  $('.dropdown-submenu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    // e.preventDefault();
  });

  $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        // e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });

  $('#video-gallery').lightGallery({
    videojs: true
}); 

});
    var tabsFn = (function() {
  
  function init() {
    setHeight();
  }
  
  function setHeight() {
    var $tabPane = $('.tab-pane'),
        tabsHeight = $('.nav-tabs').height();
    
    $tabPane.css({
      height: tabsHeight
    });
  }
    
  $(init);
})();

function carouselNormalization() {
  var items = $('#myCarousel .item'), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  if (items.length) {
    function normalizeHeights() {
      items.each(function() { //add heights to array
        heights.push($(this).height());
      });
      tallest = Math.max.apply(null, heights); //cache largest value
      items.each(function() {
        $(this).css('min-height', tallest + 'px');
      });
    };
    normalizeHeights();

    $(window).on('resize orientationchange', function() {
      tallest = 0, heights.length = 0; //reset vars
      items.each(function() {
        $(this).css('min-height', '0'); //reset min-height
      });
      normalizeHeights(); //run it again 
    });
  }
}

</script>


