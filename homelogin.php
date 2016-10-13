<!DOCTYPE html>
<?php
	session_start();
	if((isset($_SESSION['username']) && $_SESSION['username'] != '')){
		include "headerlogin.php";
	}else{
		header("Location: home.php");
		include "header.php";
	}	
?>

   <section>
		<div id="logoutdiv">
		<div class="row">
		  <div class="col-sm-4"> 
		  <center><h3>Current Location</h3></center>
		  <input type="text" id="curLocation" style="width:100%;height:50px;margin:5px;font-size:20px;"/>
		  <input type="submit" id="curLocButton" name="location" value="I'm Hungry" class="btn btn-primary loginButton">
		  </div>
		  <div class="col-sm-8">			
			<p id="addressLat" style="display:none;" ><?php
				echo $_SESSION['addressLat'] ;
			?></p>
			<p id="addressLong" style="display:none;" ><?php
				echo $_SESSION['addressLong'] ;
			?></p>
			<div id="map" style="width:95%;height:500px"></div>
		  </div>
		</div>
		<div class="row">
			<p id="norestaurant"></p>
			<div style="display:none;" id="divofrestaurant">
				<center><h3>RESTAURANT NEAR YOU</h3></center>
				<br/>
				<div class="col-sm-6">
					<center><ul id="restaurantsList">
						<li><h3>Restaurant Name</h3></li>
					</ul></center>
				</div>
				<div class="col-sm-6">
					<center><ul id="restaurantsAddList">
						<li><h3>Restaurant Address</h3></li>
					</ul></center>
				</div>
			</div>
		</div>
	</section>	
	
</body>

<script type="text/javascript">
function myMap() {  
  var currentLat=$('#addressLat').text();
  var currentLong=$('#addressLong').text();
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
	zoom: 8,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: new google.maps.LatLng(currentLat, currentLong)
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIPHj406dTltNaNJ_F2nVC24sts6vQVKY&callback=myMap"
    async defer></script>
</html>