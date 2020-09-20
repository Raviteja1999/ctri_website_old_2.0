<!DOCTYPE html>
<html lang="en"><head>
<link href="css/home.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="images/fav.png"><meta charset="utf-8">
<title>Tobacco In India Economy  | CTRI,Rajahmundry</title>
<link type="text/css" href="menu.css" rel="stylesheet">
<style type="text/css">
<!--
.style2 {
	font-size: 11px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<div class="container">
<header>
	<img  style='height:125px;width:1000px' src="images/header.jpg" alt="ctri">
	</header>
 
	<nav>
    	<ul id="menu">
	<li><a href="index.php" style="margin-left: 50px">HOME</a></li>
	<li><a href="#" >FOR FARMERS</a>
	<ul >
	<li><a href='files/success.pdf' target="_blank" title="opens a PDF file in new window">Success Stories</a></li>
	<li><a href='for_origin.php'>Origin</a></li> 
	<li><a href='for_types.php'>Type Of Tobacco</a></li>
	<li><a href='for_morphology.php'>Morphology</a></li> 
	<li><a href='for_soil.php'>Soils & Climate</a></li>	
	<li><a href='for_nursery.php'>Nursery</a></li>
	<li><a href='files/agronomy.pdf' target="_blank" title="opens a PDF file in new window">Agronomic practices</a></li>
	<li><a href='for_curing.php'>Curing & Grading</a></li>
	<li><a href='for_controlPests.php'>Management of Insect Pests</a></li>
	<li><a href='for_controlDisease.php'>Management of Diseases</a></li>
	<li><a href='for_quality.php'>Quality Parameter </a></li>
	<li><a href='for_tobaccoEconomy.php'>Tobacco in Indian Economy</a></li>
	</ul></li>

<li><a href="#">&nbsp; RESEARCH</a> 
	<ul>
	<li><a href='files/RESEARCH.pdf' target="_blank" title="opens a PDF file in new window"  >Research achievements</a></li>
	<li><a href='files/projects1.pdf' target="_blank" title="opens a PDF file in new window">On-going projects</a></li>
	<li><a href='home_research_external.php'>Extenllay Funded Projects</a></li>
	<li ><a href='files/technology.pdf' target="_blank" title="opens a PDF file in new window">Technologies</a></li>
        <li ><a href='files/varieties.pdf' target="_blank" title="opens a PDF file in new window">Varieties</a></li>
        <li ><a href='files/colobration.pdf' target="_blank" title="opens a PDF file in new window">Collaborations</a></li>
        <li ><a href='home_research_publications.php'>Publications</a></li>
	<li ><a href='files/ainrp.pdf' target="_blank" title="opens a PDF file in new window">AINP on Tobacco</a></li>
        <li ><a href='files/award.pdf' target="_blank" title="opens a PDF file in new window">Award Winners</a></li>
        <li ><a href='home_research_patents.php'>Patents</a></li>

       </ul></li>

	<li><a href="#">ANNOUNCEMENTS</a>
	<ul>
	<li><a href='press/index.html'>Press Release</a></li>
	<li><a href='circular.php'>Circulars</a></li>
	<li><a href='employment.php'>Employment </a></li>
	<li><a href='announcement_ria.php'>Right to Information Act</a></li>
	</ul></li>

<li><a href="#">DOWNLOADS</a>
	<ul>
	<li><a href='download_tenders.php'>TENDERS/QUOTATIONS</a></li>
	<li><a href='application_forms.php'>APPLICATION FORMS</a></li>
	<li><a href='download_doccument.php'>DOCUMENTS</a></li>
	<li><a href='gallery/index.html'>GALLERY</a></li>
        <li><a href='office_orders.php'>OFFICE ORDERS</a></li>

	</ul></li>

	<li ><a href="related_sites.php">RELATED SITES</a></li>        

	    
      

	<li><a href="#">&nbsp;  STAFF</a>
	<ul>
	<li><a href='staff_director.php'>DIRECTOR</a></li>
	<li><a href='staff_scientist10.php'>SCIENTISTS</a></li>
	<li><a href='staff_technical.php'>TECHNICAL</a></li>
	<li><a href='staff_admin.php'>ADMINISTRATION</a></li>
	<li ><a href="staff_support.php">SKILLED SUPPORTING STAFF</a></li>
        <li ><a href="home_staff.php">STAFF POSITION</a></li>
	</ul></li> 
	
	 <li><a href='/ica_final/index.php' target="_blank">SAIF</a></li>

 <li class="last"><a href="https://play.google.com/store/apps/details?id=com.icar.ctri&hl=en">Mobile App</a></li>

        <li><a href='files/training.pdf' target="_blank">TRAINING CALENDAR</a></li>

	<li><a href='help.php' target="_blank">HELP</a></li> 

    	<li class="last"><a href="contact.php">CONTACT</a></li>	
   

       

        <li style="float: right;font-size: 20px;font-weight: bold;margin-right: auto;">
	<div >		
		
  <a title="Screen Reader" href="reader.php"><b><img src="images/screen.jpg" ></b></a>
                               <a href="#" id="incfont" style="font-size: 15px;">A+</a>
		<a href="#" id="norfont" style="font-size: 15px;">A</a>
		<a href="#" id="decfont" style="font-size: 15px;">A-</a>
	
	</div>	</li>

	</ul>
  </nav>




	

	<div class="content">
	
<h3 style="color:blue; text-align:left;">Home&gt;Announcement&gt;Circulars</h3>		




<h1 style="text-align: center; "><span style="font-size:16px;"><span style="color: rgb(165, 42, 42); "><strong>CIRCULARS</strong></span></span></h1><br />

<div style="margin-top:50px">
<?php



include "connect.php";

        echo"<table width='1000'><tr><td align='left'>";

        $result=mysql_query("select * from staff where cat = 'Scientist' order by expey desc;");

		while($row=mysql_fetch_array($result))

		{

		echo"

		

		<div class='staff'>

			<table border='0' height='50' width='320'>

			<tr><td rowspan='3' align='center'><img src='$row[11]' height='50' width='40'/></td><td><a href='profile.php?eid=".$row[0]."'><b style='font-size:15px;'>$row[1]</b></a></td></tr>

			<tr><td style='font-size:12px;'>$row[3]</td></tr>

			<tr>  <td style='font-size:13px;'>$row[8]</td></tr>

			</table></div>";

		

		}

		

		echo"</td></tr></table>";

?>
</div>
   <br class="clear" />

</div><!-- Class Content End -->


<div class="footer">

<p><span class="right"><a href="disclaimer.php">DISCLAIMER</a> |       <a href="webpolicy.php">WEB POLICY </a> |     
<a href="privacy.php">PRIVACY POLICY</a></span>

<span class="left">&copy; <?php echo date("Y");?>  Reserved to Central Tobacco Research Institute.</span></p>


</div>
</div><!-- Container class End -->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript"> 
   $(function() {
   if ($.browser.msie && $.browser.version.substr(0,1)<7)
	{
	$('li').has('ul').mouseover(function(){
	$(this).children('ul').css('visibility','visible');			}).mouseout(function(){	
	$(this).children('ul').css('visibility','hidden');			})		}        });

</script>
	
</body>
</html>