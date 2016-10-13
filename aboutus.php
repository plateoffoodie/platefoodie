<!DOCTYPE html>
	<html>
		<?php
			session_start();
			if((isset($_SESSION['username']) && $_SESSION['username'] != '')){
				include "headerlogin.php";
			}else{
				include "header.php";
			}	
		?>
					<section>
						<center> 
						<br class="floater"/>
							<div class="aboutus">
							<center><p> <h2> All About PlateFoodie <h2> </p></center>
								<p>Ever wanted to order a takeout but when you arrive at the restaurant there's this big annoyance called a line? </p> 
								<p> Well us in PlateFoodie.Inc can help you, our website PlateFoodie lets you order a takeout and by the time you get there it's already ready.</p> 
								<p> No more waiting in freakishly long lines, no more sighing because the other line is moving faster than the one you're in.</p>
								<p> You just simply arrive on time for the food to be ready, pay for it, take it back with you and eat it until your satisfied. </p>
						<br class="floater"/>
						<div class="history">
						<center><p> <h2> PlateFoodie's Creation <h2> </p> </center>
						<p>A long time ago, one of the developers was making a quick stop at a fast food restaurant and wanted to order a take out for his/her family </p> 
						<p> but when she got there, their was this very long line and of course since she was in a hurry she got annoyed and just went home empty. </p> 
						<p> The next day we were given a task to create a proposal website and that's when she said "how about making a website for ordering take outs" </p> 
						<p> and we said "why not" and that's how PlateFoodie was created.</p>
						
						
</div>
<br><br><br><br><br><br><br><br><br>
     <div class="developersbox">
     <font size="+5"><center> <h2> Developers <h2> </center></font><br>
     <center><table cellspacing="50">
     <tr>
     <td><img src="images/ClydeG.jpg" style="border-radius:100%"><br></td>
     <td><img src="images/Juve.jpg" style="border-radius:100%"><br></td>
     <td><img src="images/RheanJ.jpg" style="border-radius:100%"><br></td>
     <td><img src="images/Rey.jpg" style="border-radius:100%"><br></td>
     <td><img src="images/Mae.jpg" style="border-radius:100%"><br></td>
     </tr>
     <tr>
     <td><center>Clyde Ganzo</center></td>
     <td><center>Juve Christian Narvios</center></td>
     <td><center>Renali Mata</center></td>
     <td><center>Rey Martinez</center></td>
     <td><center>Bebie Mae Montalban</center></td>
     </tr></table></center>
     </div>
    </br> <div id="extra"><center>All rights Reserved PlateFoode.Inc @ 2016. Special Thanks to Sublime Text 2, Google Search, Youtube, University of San Carlos.</center></div>   
</div>


						
						</center> 	
				</section>

		<?php
		include "footer.php";
		?>

</body>			
</html>