<!DOCTYPE html>
<?php
	session_start();
	if((isset($_SESSION['username']) && $_SESSION['username'] != '')){
		include "headerlogin.php";
	}else{
		include "header.php";
	}	
?>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('images/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


   <section>
   
		<div class="row" id="logoutdiv">
		  <div class="col-sm-8">
			<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 65px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
					<div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
				</div>
				<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 2000px; overflow: hidden;">
					<div data-p="225.00" style="display: none;">
						<img data-u="image" src="images/homepic1.jpg" />
					</div>
					<a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
					<div data-p="225.00" style="display: none;">
						<img data-u="image" src="images/homepic2.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none; borderstyle:inial">
						<img data-u="image" src="images/homepic3.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic4.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic5.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic6.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic7.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic8.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none;">
						<img data-u="image" src="images/homepic9.jpg" />
					</div>
					<div data-p="225.00" data-po="80% 55%" style="display: none; ">
						<img data-u="image" src="images/homepic10.jpg" />
					</div>
				</div>
				<!-- Bullet Navigator -->
				<!-- Arrow Navigator -->
				<span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
				<span data-u="arrowright" class="jssora22r" style="top:0px;left:75%;width:40px;height:58px;" data-autocenter="2"></span>
			</div>			
		  </div>
		  <div class="col-sm-4">
		  
			<div class="reservation">
		
				<br>
				<input type="text" class="chooseDate" id="regusername" placeholder="Username" required/>
				<br/>
								<br/>

				<input type="password" class="chooseDate" id="regpassword" placeholder="Password" required/>
								<br/>
								<br/>
				<p>
				<input type="text" class="chooseDate2" id="regfirstname" placeholder="FirstName"  pattern="[a-zA-Z]+" title="Letters Only" required/>
				<input type="text" class="chooseDate2" id="reglastname" placeholder="LastName" pattern="[a-zA-Z]+" title="Letters Only" required/></p>
				<br/>
				
				<input type="text" class="chooseDate" id="regAddress" placeholder="Address" required/>				
				<br/>
				<br/>
				<input type="number" class="chooseDate" id="regcontactNumber" placeholder="Contact Number" required/>
				<br/>
								<br/>

				<h5> <b>Birthday: </b></h5><input type="text" class="chooseDate" id="datepickerbday">
											<br/>
				
				<p class="error" id="registerError"></p>
				<button type="submit" class="btn btn-secondary reserveButton" id="register">Register</button>

			</div>
		</div>
		</div>
	</section>	
	
</body>
<script>
	$( function() {
			$( "#datepickerbday" ).datepicker({ dateFormat: 'yymmdd' });
		  } );
		  
	
</script>
</html>