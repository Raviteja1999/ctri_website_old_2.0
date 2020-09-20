</div>
<div class="footer">
 <p>
 	<span class="right">
 	<a href="disclaimer.php">DISCLAIMER</a> | 
    <a href="webpolicy.php">WEB POLICY</a> | 
    <a href="login.php">LOGIN</a>
    </span>
  <span class="left">&copy; <?php echo date("Y");?> > Reserved to Central Tobacco Research Institute.</span></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}    
    });          
</script>


</body>
</html>