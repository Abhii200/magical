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
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							
							
							
						</ul>
					</div>
				</li>
				
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
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
							height: auto;" class="navbar-brand"><img   src="assets/js/img/logodb.png" alt="" width="80px"></span>
	
	
			                
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="padding-top: 18px;">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut Up">
			                    <li ><a href="index.html">home</a></li>
			                    
			                    <li ><a href="explore.php">Explore</a></li>
			                    <li ><a href="method.php">Method</a></li>
								<li ><a href="download.php">Download</a></li>
								<li class="scroll"><a href="#blog">About</a></li>
			                    <li class="scroll"><a href="#contact">Contact</a></li>
								
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    

		</section>

<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }

        .table-container {
  position: relative;
  margin-bottom: 20px; /* Adding margin to prevent button from sticking to the table */
}

.export-button {
  position: absolute;
  top: -40px;
  left: 48%;
  margin: 10px;
  padding: 5px 12px;
  background-color: #349;
  color: white;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

        
    </style>
</head>

<body>
<div class="table-container">
        <!-- Export button at the top right corner -->
        <button class="export-button" onclick="exportToExcel()">Export</button>

        <!-- Centered table container -->
        <table style="margin: 80px auto;">
        <tr>
            <th>GENE1</th>
            <th>GENE2</th>
            <th>predict_gi</th>
            <th>Score</th>
        </tr>

        <?php
include 'dataconnect.php';

$g1 = $_POST["gene1"];
$g2 = $_POST["gene2"];

if ($g1 != null || $g2 != null) {
    $sql = "SELECT * FROM data2";

    if ($g1 != null && $g2 != null) {
        $sql .= " WHERE (a='$g1' AND b='$g2') OR (a='$g2' AND b='$g1')";
    } elseif ($g1 != null) {
        $sql .= " WHERE a='$g1' OR b='$g1'";
    } elseif ($g2 != null) {
        $sql .= " WHERE a='$g2' OR b='$g2'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["a"] . "</td>";
            echo "<td>" . $row["b"] . "</td>";
            echo "<td>" . $row["c"] . "</td>";
            echo "<td>" . $row["d"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }
} else {
    $sql = "SELECT * FROM data2";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["a"] . "</td>";
            echo "<td>" . $row["b"] . "</td>";
            echo "<td>" . $row["c"] . "</td>";
            echo "<td>" . $row["d"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }
}

$conn->close();
?>


    </table>

    <!-- Export button and script -->
    <!-- Export button and script -->

<!-- Export button and script -->
<!-- Export button and script -->


<script>
    function exportToExcel() {
        const table = document.querySelector('table');
        const rows = Array.from(table.querySelectorAll('tr'));

        // Extract header columns
        const headerColumns = Array.from(rows[0].querySelectorAll('th'));
        const headerData = headerColumns.map(column => column.innerText);

        // Extract data rows
        const rowData = rows.slice(1).map(row => {
            const columns = Array.from(row.querySelectorAll('td'));
            return columns.map(column => column.innerText);
        });

        const csvContent = `${headerData.join('\t')}\n${rowData.map(row => row.join('\t')).join('\n')}`;

        const blob = new Blob([csvContent], { type: 'application/vnd.ms-excel' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'report.xls';
        link.click();
    }
</script>
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


</body>

</html>
