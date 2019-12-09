<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper"> 
	    <div class="container">

	
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/kopi.jpg" style="width: 780px;height: 376px;" alt="First slide">


		                  </div>
		                  <div class="item">
		                    <img src="images/bijikopi.jpeg" style="width: 780px;height: 376px;" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/artikel.jpg" style="width: 780px;height: 376px;" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
	        	</div>

	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>

		            		<a href="category.php?category=kopicair">
									<div class='col-sm-6'>
										<h3 style="color: brown;">Kopi</h3>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='images/bubukbubuk.jpg' width='100%' height='230px' class='thumbnail'>
		       									<h5 style="color: black;">Dapatkan Sekarang dengan kualitas terbaik.</h5>
		       								</div>
		       								
	       								</div>
	       							</div>
	       						</a>


	       						<a href="category.php?category=bijikopi">
									<div class='col-sm-6 col-sm-offset-0'>
										<h3 style="color: brown;">Biji Kopi</h3>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='images/bijikopi.jpg' width='100%' height='230px' class='thumbnail'>
		       									<h5 style="color: black;">Dapatkan Biji Kopi terbaik Sekarang.</h5>
		       								</div>
		       								
	       								</div>
	       							</div>
	       						</a>

	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>