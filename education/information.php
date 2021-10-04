<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Information</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">

			<style>
				.table {
					border-radius: 5px;
  					/*background-color: #f2f2f2;*/
					margin-top:100px;
					width:50%;
					}
		
				</style>
			
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
			  				<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">greenvalley@.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><h1 style="color:orange;">Green Valley College</h1></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home</a></li>
			    
			          <li class="menu-has-children"><a href="">Student</a>
			            <ul>
			              <li><a href="information.php">Information</a></li>
			              <li><a href="attendance.php">Attendance</a></li>
			              <li><a href="timetable.php">Timetable</a></li>
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Faculty</a>
			            <ul>
			              <li><a href="finformation.php">Information</a></li>
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Event</a>
			            <ul>
			              <li><a href="technical.html">Technical</a></li>
			              <li><a href="nontechnical.html">Non Technical</a></li>
			            </ul>
			          </li>	
			          <li><a href="about.html">About us</a></li>
			          <li><a href="contact.html">contact</a></li>
			          
			         			                		
			            </ul>
			          </li>					          					          		          
			          
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>		
			            </ul>
			          </li>					          					          		          

			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Information				
							</h1>	
						<!----	<p class="text-white link-nav"><a href="index.html">Student </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html">Information</a></p>-->
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
	
			<!-- Start feature Area -->
			


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
            <script src="js/main.js"></script>	
			</body>
			</html>
			<?php
$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "project";
 
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

$sql="SELECT * FROM newuserlogin WHERE Enroll_No=".$_SESSION['UserID'];
$result=mysqli_query($conn,$sql);
	
?>  
       <!--     <table border="5" align="center">
		
        <tr>
            
            <td align="center"><b>FullName</b></td>
            <td align="center"><b>Enroll_No</b></td>
            <td align="center"><b>homeaddress</b></td>
            <td align="center"><b>gender</b></td>
            <td align="center"><b>mobilenumber</b></td>
            <td align="center"><b>DOB</b></td>
            <td align="center"><b>blood_group</b></td>
			<td align="center"><b>branch</b></td>
			<td align="center"><b>password</b></td>
            <td align="center"><b>email</b></td>
        </tr>  -->

<?php
	while($row = mysqli_fetch_assoc($result)) {       
	
   ?>    
   
			<table border="0" align="center" style=" background-color: lightblue" class="table"> 
            <tr>
				<td align="center" style="color:red">     
					<?php echo  "FULLNAME:- " .  $row["Fullname"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
			
					
			<tr>
				<td align="center" style="color:blue">			  
					<?php echo "ENROLLMENT NUMBER:- " . $row["Enroll_No"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
			
			<tr>
				<td align="center" style="color:red">
				<?php echo  "ADDRESS:- " . $row["home_address"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
				  
			<tr>
				<td align="center" style="color:blue">
				<?php echo  "GENDER:- ". $row["gender"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
				  
			<tr>
				<td align="center" style="color:red">
				<?php echo "MOBILE NUMBER:- " . $row["mobilenumber"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
				
			<tr>
				<td align="center" style="color:blue">
				<?php echo "DOB:- " . $row["dob"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
				  
			<tr>
				<td align="center" style="color:red">
				<?php echo "BLOOD GROUP:- " . $row["blood_group"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
				  
			<tr>
				<td align="center" style="color:blue">
				<?php echo "BRANCH:- " . $row["branch"] . "<BR>" . "<BR>";?>
			</td>
			</tr>
                  
			<tr>
				<td align="center" style="color:red">
				<?php echo "PASSWORD:- " . $row["Password"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
			
			<tr>
				<td align="center" style="color:blue">
				<?php echo "EMAIL ID:- " . $row["email"] . "<BR>" . "<BR>";?>
				</td>
			</tr>
	</table>
   

<?php
	}
	mysqli_close($conn);

 ?>
<?php

?> </table>
</body>
 </html>