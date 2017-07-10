<?php
ob_start();
session_start();
if(!isset($_SESSION['uname']))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Afzal Electronics</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
      
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/perfect-scrollbar.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <link href="css/jquery.nouislider.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/fontello.css">
   		<link rel="stylesheet" href="css/animation.css">
        <link rel="stylesheet" href="css/chosen.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">
        <!--DataTable work--> 
        
        <link href="dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.4.js" type="text/javascript"></script>
        <script src="jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="dataTables.bootstrap.min.js" type="text/javascript"></script>
        
        <script> $(document).ready(function() {
    $('#example').DataTable({"lengthMenu":[[6],[6,"All"]]});
        } );</script>
        
        
        
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
<!--					
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
                                        <div id="main-header" class="style5" style="margin-top: -30px;">
						
						<div class="row">
							
							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
                                                            <a href="home.php"><img src="img/logo_1.png" alt="Logo"></a>
							</div>
							

						</div>
						
					</div>
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style5">
						<ul>
							
							<li class="home-green">
								<a href="home.php">
									<span class="nav-caption">Home</span>
								</a>
								
<!--								<ul class="normal-dropdown normalAnimation">
									<li><a href="#">Layouts <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Layout 1</a></li>
											<li><a href="home_v2.html">Layout 2</a></li>
											<li><a href="home_v3.html">Layout 3</a></li>
										</ul>
									</li>
									<li><a href="#">Headers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Header 1</a></li>
											<li><a href="home_v2.html">Header 2</a></li>
											<li><a href="home_v3.html">Header 3</a></li>
											<li><a href="category_v1.html">Header 4</a></li>
											<li><a href="category_v2.html">Header 5</a></li>
											<li><a href="products_page_v1.html">Header 6</a></li>
										</ul>
									</li>
									<li><a href="#">Footers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html#footer">Footer 1</a></li>
											<li><a href="home_v2.html#footer">Footer 2</a></li>
											<li><a href="home_v3.html#footer">Footer 3</a></li>
											<li><a href="category_v1.html#footer">Footer 4</a></li>
											<li><a href="category_v2.htm#footer">Footer 5</a></li>
											<li><a href="products_page_v1.html#footer">Footer 6</a></li>
										</ul>
									</li>
									<li><a href="#">Sliders <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Revolution Slider</a></li>
											<li><a href="home_v2.html">IOS Slider</a></li>
											<li><a href="home_v3.html">Flex Slider</a></li>
										</ul>
									</li>
								</ul>-->
							</li>
							
							<li class="red">
								<a href="#">
									<span class="nav-caption">Brand</span>
								</a>
								
								<ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<!--<li><span class="nav-caption">Digital Cameras</span></li>-->
                                                                                        <li><a href="home.php?pg=disbr"><i class="icons icon-right-dir"></i> Display Brand</a></li>
											<li><a href="home.php?pg=dispro"><i class="icons icon-right-dir"></i>Display Product</a></li>
											<li><a href="home.php?pg=dispc"><i class="icons icon-right-dir"></i> Display Product Category</a></li>
                                                                                        <li><a href="home.php?pg=dissup"><i class="icons icon-right-dir"></i> Display Supplier</a></li>
                                                                                        <li><a href="home.php?pg=disst"><i class="icons icon-right-dir"></i> Display Stock</a></li>
                                                                                </ul>
									</li>
<!--									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											
											<li><a href="#"><i class="icons icon-right-dir"></i> Continuous Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Flash Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Light Meters</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Batteries</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cables &amp; Adapters</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Camcorder Tapes &amp; Discs</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cases, Bags &amp; Covers</a></li>
										</ul>
									</li>-->
								</ul>
								
							</li>
							
							<li class="blue">
                                                            <a href="#">
									<span class="nav-caption">Customers</span>
								</a>
                                                            
                                                            <ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											
                                                                                        <li><a href="home.php?pg=discus"><i class="icons icon-right-dir"></i> Display Customer</a></li>
											<li><a href="home.php?pg=disca"><i class="icons icon-right-dir"></i>Display Customer Account</a></li>
											<li><a href="home.php?pg=disim"><i class="icons icon-right-dir"></i> Display Installment Mode</a></li>
                                                                                        <li><a href="home.php?pg=diswit"><i class="icons icon-right-dir"></i> Display Witness</a></li>
                                                                                        
                                                                                </ul>
									</li>
                                                            </ul>
							</li>
							
							<li class="orange">
								<a href="#">
									<span class="nav-caption">Stock</span>
								</a>
                                                            
                                                             <ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											
                                                                                        <li><a href="home.php?pg=disemp"><i class="icons icon-right-dir"></i> Display Employee</a></li>
											<li><a href="home.php?pg=dispd"><i class="icons icon-right-dir"></i>Display Purchase Detail</a></li>
											<li><a href="home.php?pg=dispo"><i class="icons icon-right-dir"></i> Display Purchase Order</a></li>
                                                                                        <li><a href="home.php?pg=dissd"><i class="icons icon-right-dir"></i> Display Sales Detail</a></li>
                                                                                        
                                                                                </ul>
									</li>
                                                            </ul>
							</li>
							
							<li class="green">
                                                            <a href="logout.php">
									<span class="nav-caption">Logout</span>
								</a>
							</li>
							
<!--							<li class="purple">
                                                            <a href="logout.php">									<span class="nav-caption">Contact</span>
                                                                        <span class="nav-caption">Logout</span>   
								</a>
							</li>-->
							
							<li class="nav-search">
                                	<i class="icons icon-search-1"></i>
							</li>
							
						</ul>
						
						<div id="search-bar">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
                            	<table id="search-bar-table">
                                    <tr>
                                    	<td class="search-column-1">
                                            <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" placeholder="Enter your keyword">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">Advanced Search</a></p>
                                        	<select class="chosen-select-search">
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                            </select>
                                		</td>
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="">
								<i class="icons icon-search-1"></i>
							</div>
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
               
                
				<!-- Main Content -->
                                <section class="main-content col-lg-12 col-md-12 col-sm-12" style=" height: 419px;" >
                        
                    <div class="row">
                       
                        
                    
                    </div>
					
					
						
				</section>
				<!-- /Main Content -->
				
				
				


				
			</div>
			<!-- /Content -->
			
			

			<!-- Banner -->

			<!-- /Banner -->

			
			<!-- Footer -->
			<footer id="footer" class="row">
				
				<!-- Main Footer -->

				<!-- /Main Footer -->
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-15 col-md-15 col-sm-15">
                                                            <p style="font-size: 14px; text-align: center;" class="copyright">Copyright 2017 <a href="#">Afzal Electronics</a>. All Rights Reserved.</p>
							</div>
							
<!--							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>-->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="js/modernizr.min.js"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>
		
	 
		<script src="js/perfect-scrollbar.min.js"></script>
		
	 
		<script src="js/zoomsl-3.0.min.js"></script>
		
		  
		<script src="js/jquery.fancybox.pack.js"></script>
		
		   
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>


		<script defer src="js/flexslider.min.js"></script>
 
		<script src = "js/jquery.iosslider.min.js"></script>
		
		  
		<script src="js/jquery.nouislider.min.js"></script>
		
	 
		<script src="js/owl.carousel.min.js"></script>
		
 
		<script src="js/zoomsl-3.0.min.js"></script>
		
	 
        <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
        
        
        <script defer src="js/bootstrap.min.js"></script>
        <script src="js/main-script.js"></script>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
 </body>
    
</html>
<?php
ob_flush();
?>