<?php 


$query = "select data_value from web_data where data_key='visitor_count'";
$res = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($res);

?>
<div class="row footer text-center" style="">
  <span><?=$row ['data_value']?> </span> |
  <a href="#"><font color="#ffffff">Developed by AKMU, ICAR-CTRI, Rajahmundry</font></a> |
   <span>Updated on 14/06/2020</span>
 
  
  </p>

</div>
</div>


</body>
</html>