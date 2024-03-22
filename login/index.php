<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<?php include ("includ/header.php");?>


    <div class="content">
        <!-- notification message -->
           <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
             ?>
           </h3>
        </div>
            <?php endif ?>
      </div>
     <!-- end smg -->
<section id="block-slider-banner">
     <div class="wrapper">
	       <section class="ipad">
	       	<a href="#"><img src="img/2.jpg" alt=""></a>
	       </section>

	       <section class="ad">
	       	<a href="#"><img src="img/ad.png" alt="" /></a>
         
	       </section>
         
	       	
	       
     </div>
</section>

<section id="body">
      <div class="wrapper">
	<section class="block-shipping">
	<article>
		<h4><img src="img/img1.png" alt="" /> FREE<b> SHIPPING</b></h4>
		<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
	</article>
		<p class="read"><button><a href="#">Read More</a></button></p>
	</section>

	<section class="block-shipping">
	<article>
		<h4><img src="img/img2.png" alt="" /> FREE<b> SHIPPING</b></h4>
		<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer..</p>
	</article>
		<p class="read"><button><a href="#">Read More</a></button></p>
	</section>

	<section class="block-support">
	<article>
		<h4><img src="img/img3.png" alt="" /> 24/7 LIVE<b> SUPPORT</b></h4>
			<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
	</article>
		<p class="read"><button><a href="#">Read More</a></button></p>
	</section>
      </div>
</section>

<section id="block-feature-product" class="product-list">
       <div class="wrapper">
	<h2>feature <span>products</span></h2>
	<ul class="nav">
		<li><a href="#" title="previous">left</a></li>
		<li><a href="#" title="Next">right</a></li>
	</ul>
	<section class="content">
		<article>
			<a href="#"><img src="img/P-1.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$124</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-2.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$256</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-3.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$316</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-4.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$79</span></label>
		</article>
	</section>
       </div>
</section>

<section id="block-latest-product" class="product-list">
        <div class="wrapper">
	         <h2>latest <span>products</span></h2>
           <ul class="nav">
		<li><a href="#">left</a></li>
		<li><a href="#">right</a></li>
	</ul>
	<section class="content">
		<article>
			<a href="#"><img src="img/P-5.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$124</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-3.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$256</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-2.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$316</span></label>
		</article>
		<article>
			<a href="#"><img src="img/P-1.jpg" alt="" /></a>
			<a href="#">Acer Aspire E5-475-74V1</a>
			<p>Apple Mac Book Pro 13.3-inch Mid 2012 Laptop (Ci5\2.5Ghz, 8GB RAM, 1TGB HDD)</p>
			<label>Price: <span>$79</span></label>
		</article>
	</section>
	        
        </div>
</section>








<?php include ("includ/footer.php");?>