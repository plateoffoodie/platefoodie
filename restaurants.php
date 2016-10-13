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
			
		<center> 
			<section>


<div class="container">
	<br />
  <h1 font-size="100px"> Restaurant Food </h1>
  	<br />
<br />
  <div class="row">
    <div class="col-md-4">
      <a href="#">
        <img src="images/Ebi Fry.jpg" alt="Ebi Fry" style="width:250px;height:250px">
	<p>Ebi Fry</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 99.00</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 110.00</div>
        </div>
      </div>

      </a>
    </div>
    <div class="col-md-4">
     <a href="#">
        <img src="images/Kanpachi Grilled.jpg" alt="Kanpachi Grilled" style="width:250px;height:250px">
	<p>Kanpachi Grilled</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 108.00</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 120.00</div>
        </div>
      </div>

      </a>
    </div>
    <div class="col-md-4">
      <a href="#">
        <img src="images/chutoro.jpg" alt="chutoro" style="width:250px;height:250px">
	<p>Chutoro</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 89.10</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 99.00</div>
        </div>
      </div>

      </a>
    </div>
  </div>
	<br />
	<br />
   <div class="row">
    <div class="col-md-4">
      <a href="#">
        <img src="images/Aji Sushi.jpg" alt="Aji Sushi" style="width:250px;height:250px">
	<p>Aji Sushi</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 90.00</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 100.00</div>
        </div>
      </div>

      </a>
    </div>
    <div class="col-md-4">
      <a href="#">
        <img src="images/beef teppanyaki.jpg" alt="beef teppanyaki" style="width:250px;height:250px">
	<p>Beef Teppanyaki</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 117.00</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 130.00</div>
        </div>
      </div>


      </a>
    </div>
    <div class="col-md-4">
      <a href="#">
       <img src="images/Maguro Tatsuta Age.jpg" alt="Maguro Tatsuta Age" style="width:250px;height:250px">
	<p>Maguro Tatsuta Age</p>
<div class="price-block--grid">
        <a>SALE PRICE : </a><div class="product-card__price">P 108.00</div>
        <div class="product-card__sale">- 10%</div>
        <div class="old-price-wrap"><a>Original Price : </a>
          <div class="product-card__old-price">P 120.00</div>
        </div>
      </div>

      </a>
    </div>
  </div>
	<br />
	<br />

    </div>
  </div>

</div>

			</section>
		</center> 
		
	<?php
		include "footer.php";
	?>

</body>
</html>