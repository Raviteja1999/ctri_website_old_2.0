<?php @include_once('header.php'); ?>
<?php

@include_once(''); 

$query = "select data_value from web_data where data_key='visitor_count'";
$res = mysqli_query($con,$query);

if(mysqli_num_rows($res)>0){
  $row = mysqli_fetch_assoc($res);
 
  $nval = (int)$row['data_value'] + 1; 
  mysqli_query($con,"update web_data set data_value='".$nval."' where data_key='visitor_count'");
}else{
  mysqli_query($con,"insert into web_data(data_key,data_value) values('visitor_count','1')");

}


?>
<div class="row">


<?php @include_once('left_sidebar.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="col-md-7">

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 350px;">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

 <div class="carousel-inner">
    <div class="item active">      
       <img src="images/R1.jpg" class="img-responsive" alt="Los Angeles" style="width:100%;">
    </div>
	
    <div class="item">
      <img src="images/r2.jpg" class="img-responsive" alt="Chicago" style="width:100%;">
      </div>

    <div class="item">
      <img src="images/r3.jpg" class="img-responsive" alt="New York" style="width:100%;">
       </div>

     <div class="item">
      <img src="images/r4.jpg" class="img-responsive" alt="New York" style="width:100%;">
       </div>
	<div class="item">
      <img src="images/r5.jpg" class="img-responsive" alt="New York" style="width:100%;">
      </div>
	<div class="item">
      <img src="images/r6.jpg" class="img-responsive" alt="New York" style="width:100%;">
       </div>

     
  </div>

 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


 <!-- <div class="row" style="margin-bottom: 15px;width: 100%" >
        <div class="col-lg-12 col-md-4 col-sm-8 col-xs-9 bhoechie-tab-container">
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab" >
                <!-- flight section -->
                <!--<div class="bhoechie-tab-content active">
				
                   <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:14em;color:#05691a"></h1>
                      <h2 style="margin-top: 0;color:#05691a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#05691a">ICAR</h3>
                    </center>
                </div>
				
                
            </div>
        </div>
  </div>-->
  
  <p class="ex" ></p>
				  
<p align="justify"><font color="black" face="helvetica">
  
 About CTRI:-<br>    
CTRI was established in 1947 at Rajahmundry under the aegis of ICTC, Madras and which was taken over by the ICAR in 1965. CTRI has six regional stations located at Guntur, Kandukur, Jeelugumilli in AP, Hunsur in Karnataka, Vedasandur in Tamilnadu and Dinhata in West Bengal and a research centre at Kalavacharala in AP. Two KVK’s namely KVK-Kalavacharla (East Godavari distrcti) and KVK-Kandukur (Prakasam District) are functioning under the administrative control of ICAR-CTRI, Rajahmundry. All India Network Research Project Work sanctioned in 1971 has 4 main centres (Rajahmundry, Shivmogga, Anand and Pusa), 7 sub centres (Dinhata, Hunsur, Guntur, Nandyal, Nippani, Berhampur and Araul) and 4 voluntary centres (Ladol, Kandukur, Jeelugumilli and Vedasandur) to conduct research on location specific problems of tobacco in different regions. Different tobacco types namely, FCV, Burley, Chewing, Bidi, Natu, Hookah, Oriental, Lanka are being cultivated in the country. CTRI conducts research on all tobacco types through its regional stations and also the all India network research projects.
<br><br>
About SAIF:-<br>
Sophisticated Analytical Instruments were placed mainly at CTRI, Rajahmundry to cater the requirements for all the regional stations. With the help of the analytical facility, it is possible to analyse the soil fertility parameters, leaf quality parameters (nicotine’s, sugars and chlorides), leaf nutrient composition (N,P,K, Ca, Mg, S, micro nutrients), smoke quality parameters, pesticide residues, estimation of the seed oil, etc.  Analytical requirements of all the regional stations, AINPT centres were fulfilled by the sophisticated analytical facility located at Rajahmundry. In addition to that the SAIF cater the needs of tobacco board, trade, industry and universities.  The description of the different instruments, working principles, etc. were given below. 


       </p>
</div>
<style>
 p{
        margin-top: 20px;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
   }
</style>


  <?php @include_once('right_sidebar.php'); ?>
</div>
<?php @include_once('footer.php'); ?>