<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<title>Magen Shop</title>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">

 
  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
<header>
<div class="wrapper">

         
	
	
	<div class="head">
    <section class="logo">
		<a href="#"><img src="img/logo.png" alt="" /></a>
        
       
	</section>
    <div class="account">
       
       
     
          <!-- logged in user information -->
        
       <i class="icon-shopping-cart"><a href="#"> shopping cart</a></i>
       <p style="padding: 0 10px;">|</p>
       <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><i class="icon-user" style="padding:0 5px;"><a href="#"></a></i><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;padding: 0 10px;">logout</a> </p>
      <?php endif ?>
         </div>
    </div>
  
    
	<nav id="main">
		<ul>
			<li class="active"><a href="index.php"><i class="icon-home"></i></a></li>
			<li><a href="#" >Tablet</a></li>
			<li><a href="#" >Computer</a></li>
			<li><a href="#" >Phone</a></li>
			<li><a href="#" >Top Seller</a></li>
		<section class="search">
			<form>
				<input type="search" name="search" placeholder=" Search..." />
			</form>
		</section>
           
		</ul>
	</nav>
</div>
</header>