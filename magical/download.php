<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>MAGICAL DB</title>




		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.jpg"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<STYle> 
    
        
			.animate-charcterS {
				text-transform: uppercase;
				background-image: linear-gradient( -225deg, #4ba2ea 0%,#f5af16 29%, #46c5d9 67%, #54cbec 100%);
				background-size: auto auto;
				background-clip: border-box;
				background-size: 50% auto;
				color: #fff;
				background-clip: text;
				text-fill-color: transparent;
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				animation: textclip 7s linear infinite;
				display: inline-block;
				font-size: 300%;
			}
			
			
			
			@keyframes textclip {
				to {
					background-position: 50% center;
				}
			}
			
			.waviy {
				position: relative;
			}
			
			.waviy span {
				position: relative;
				display: inline-block;
				font-size: 40px;
				color: #090909;
				text-transform: uppercase;
				animation: flip 2s infinite;
				animation-delay: calc(.2s * var(--i))
			}
			
			@keyframes flip {
				0%,
				80% {
					transform: rotateY(360deg)
				}
			}
			@import url("https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@400;600;700&display=swap");
		
			$blue: #2962ff;
			
			* {
			  box-sizing: border-box;
			  margin: 0;
			  padding: 0;
			}
			
			
			
			.new-section {
			  display: flex;
			  flex-direction: column;
			  justify-content: center;
			  align-items: center;
			  
			  font-size: 2em;
			  background: #46c5d9;
			  color: #fff;
			  text-transform: uppercase;
			  gap: 30px;
			
			  h1 {
				font-size: 1em;
			
				@media (max-width: 768px) {
				  font-size: 1.3em;
				}
			  }
			}
			
			.new-text-shadow {
			  font-style: italic;
			  text-transform: uppercase;
			  color: transparent;
			  -webkit-text-stroke: #fff;
			  -webkit-text-stroke-width: 1px;
			  text-shadow: 2px 2px 10px $blue;
			  transition: all 0.5s ease-in-out;
			  text-align: center;
			  letter-spacing: 0.2em;
			  animation: new-flicker 0.5s ease-in-out infinite alternate;
			
			  &:hover {
				color: #fff;
			  }
			}
			
			.new-tags {
			  small {
				@media (max-width: 768px) {
				  font-size: 0.5em;
				}
			  }
			}
			
			@keyframes new-flicker {
			  0% {
				opacity: 0.5;
				text-shadow: 2px 2px 10px $blue;
			  }
			  100% {
				opacity: 1;
				text-shadow: 2px 2px 20px $blue;
			  }
			}
			</STYle>
			<style>
				/* Style for the popup form */
				.popup-form {
					display: none;
					position: fixed;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
					padding: 20px;
					background-color: #f9f9f9;
					border: 1px solid #ccc;
					z-index: 1;
					text-align: center; /* Center the contents */
				}
			
				/* Style for the overlay */
				.overlay {
					display: none;
					position: fixed;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background-color: rgba(0,0,0,0.7);
					z-index: 0;
				}
			
				/* Style for the button */
				button {
					padding: 10px 20px;
					background-color: #4CAF50;
					color: white;
					border: none;
					border-radius: 5px;
					cursor: pointer;
				}
			
				button:hover {
					background-color: #45a049;
				}
			
				/* Style for the submit button */
				.popup-form button {
					margin-top: 15px; /* Add margin to separate from the inputs */
				}
			</style>

			
			
    </head>
	
	<body >
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area" >
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">
						
			            <!-- Start Header Navigation -->
			            <div class="navbar-header" >
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<span style="max-width: 300px;
							height: auto;" class="navbar-brand"><img   src="assets/img/logodb.png" alt=""></span>
	
	
			                
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->


			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="padding-top: 18px;">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li ><a href="index.html">home</a></li>
			                    
			                    <li ><a href="explore.php">Explore</a></li>
			                    <li ><a href="method.php">Method</a></li>
								<li class="scroll active"><a href="download.php">Download</a></li>
								<li class="scroll"><a href="#blog">About</a></li>
			                    <li class="scroll"><a href="#contact">Contact</a></li>
								
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    

		</section>
		<section class="new-section" style="margin-top: 50px; margin-bottom:70px;"><br>
                <h1 class="new-text-shadow">--DOWNLOAD AND UPLOAD HERE-- </h1>
               
                <br>
              </section>
			  <style>
    /* Your existing CSS styles here */

    .button-container {
        display: flex;
        justify-content: space-between;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    .download {
        background-color: #4CAF50;
        color: white;
    }

    .upload {
        background-color: #008CBA;
        color: white;
    }
</style>

    <div style=" font-family: 'Arial', sans-serif;
            
            color: #333;
            margin: 20px;
            text-align: center;">

		<a href="assets/img/logodb.png" download="logodb.png">
		<button class="button download">Download File 1</button>
		</a>

		<a href="assets/img/logodb.png" download="logodb.png">
		<button class="button download">Download File 2</button>
		</a>

		<a href="assets/img/logodb.png" download="logodb.png">
		<button class="button download">Download File 3</button>
		</a>

        

    <!-- Upload Buttons -->
	<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="file1">File 1:</label>
            <input type="file" name="file1" id="file1" style="display:none;" onchange="updateFileName('file1')">
            <button type="button" class="button upload" onclick="document.getElementById('file1').click()">Upload File
                1</button>
            <span id="file1-name"></span>
        </div>

        <div>
            <label for="file2">File 2:</label>
            <input type="file" name="file2" id="file2" style="display:none;" onchange="updateFileName('file2')">
            <button type="button" class="button upload" onclick="document.getElementById('file2').click()">Upload File
                2</button>
            <span id="file2-name"></span>
        </div>

        <div>
            <label for="file3">File 3:</label>
            <input type="file" name="file3" id="file3" style="display:none;" onchange="updateFileName('file3')">
            <button type="button" class="button upload" onclick="document.getElementById('file3').click()">Upload File
                3</button>
            <span id="file3-name"></span>
        </div>

        <input type="submit" value="Upload Files">
		<form action="upload.php" method="post" enctype="multipart/form-data">
    </form>

    <script>
        function updateFileName(inputId) {
            const input = document.getElementById(inputId);
            const spanId = inputId + "-name";
            const span = document.getElementById(spanId);

            if (input.files.length > 0) {
                span.textContent = " - " + input.files[0].name;
            } else {
                span.textContent = "";
            }
        }
    </script>

<?php
// Include your database connection file if needed
// include 'db_connection.php';

// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "record";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize($data)
{
    return htmlspecialchars(strip_tags($data));
}

// Function to download the file
function downloadFile($fileId)
{
    global $conn;

    // Query to get the file name from the database
    $sql = "SELECT file_name FROM files WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->bind_result($fileName);

    if ($stmt->fetch()) {
        // Directory where files are uploaded
        $uploadDir = "files/";

        // Full path to the file
        $filePath = $uploadDir . '/' . $fileName;

        // Set the correct content type
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        readfile($filePath);
        exit;
    }

    $stmt->close();
}

// Check if file id is set in the URL
if (isset($_GET['file_id'])) {
    $fileId = sanitize($_GET['file_id']);
    downloadFile($fileId);
}


$conn->close();
?>
</body>

	<!-- Include all js compiled plugins (below), or include individual files as needed -->

<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
