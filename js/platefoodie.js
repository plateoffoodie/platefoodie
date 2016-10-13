$(function(){
	$(".dropdown").hover(            
		function() {
			$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
			$(this).toggleClass('open');
			$('b', this).toggleClass("caret caret-up");                
		},
		function() {
			$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
			$(this).toggleClass('open');
			$('b', this).toggleClass("caret caret-up");                
		});
		
	$("#logoutButton").click(function(e){
		$.ajax({
		   type: "POST",
		   url: "logout.php",
		   success: function(data){ 
				window.location.href = "home.php";				
		   }	
		});		
	});
	
	//LoginButton
	$("#loginbutton").click(function(e){
		if ( $.trim( $('#username').val() ) == '' ){
			$("p#loginError").text("Spaces and special characters arent allowed in username");
		}else{
			var username=$("#username").val();
			var password=$("#password").val();
			$.ajax({
			   type: "POST",
			   url: "login.php",
			   dataType: 'HTML',
			   data: "username="+username+"&password="+password,
			   success: function(data){ 
					if (data.indexOf("good") >= 0){
						$("p#address").text(data.substring(5));
						window.location.href = "homelogin.php";
					}
					else{
						$("#username").val('');
						$("#password").val('');
						$("p#loginError").text(data);
					}					
			   }	
			  });
		}		
	});
	
	//REtrieve restaurant
	$("#curLocButton").click(function(e){
		var curLoc=$("#curLocation").val();
		$.ajax({
		   type: "POST",
		   url: "retrieveres.php",
		   dataType: 'json',
		   data: "curLoc="+curLoc,
		   success: function(data){ 
			if(typeof data[0].resName != 'undefined'){
			 $('#divofrestaurant').show();
			 for(var i=0;i<data.length;i++){
				 $('#restaurantsList').append('<li class="notinline">'+data[i].resName+'</li>');
				 $('#restaurantsAddList').append('<li class="notinline">'+data[i].resAddress+'</li>');	
			 }
			}else{
				$("p#norestaurant").text('No Restaurant Near You!');
			}
		   }	
		  });
	});
	
	//register
	$("#register").click(function(e){
		var textregEx = /^[a-zA-Z]*$/;
		var textSparegEx = /^[a-zA-Z\s]*$/;
		if ( $.trim( $('#regusername').val() ) == '' )
			$("p#registerError").text("input username not space");
		else if($.trim( $('#regpassword').val() ) == '')
			$("p#registerError").text("input password not space");
		else if($.trim( $('#regfirstname').val() ) == '')
			$("p#registerError").text("input firstname not space");
		else if(!textSparegEx.test($("#regfirstname").val()))
			$("p#registerError").text("firstname must not contain numbers");
		else if(!textregEx.test($("#reglastname").val()))
			$("p#registerError").text("lastname is only letters");
		else{
			var username=$("#regusername").val();
			var password=$("#regpassword").val();
			var firstname=$("#regfirstname").val();
			var lastname=$("#reglastname").val();
			var contactNumber=$("#regcontactNumber").val();
			var bday=$("#datepickerbday").val();
			var address=$("#regAddress").val();
			var datapass={
				"username" : username,
				"password" : password,
				"firstname" : firstname,
				"lastname" : lastname,
				"contactNumber" : contactNumber,
				"bday" : bday,
				"address" : address
			};
			$.ajax({
			   type: "POST",
			   url: "register.php",
			   data: datapass,
			   success: function(data){ 
					if(data == '1'){
						$("p#registerError").text('New record created successfully');
						$("#regusername").val('');
						$("#regpassword").val('');
						$("#regfirstname").val('');
						$("#reglastname").val('');
						$("#regcontactNumber").val('');
						$("#datepickerbday").val('');
						$("#regAddress").val('');
					}
					else{
						alert(data);
						$("p#registerError").text(data);
					}
			   }	
			  });
		}
		
		
	});
	
});
    