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
        <title>Directory Landing Page</title>




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
						
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
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
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li ><a href="index.html">home</a></li>
			                    
			                    <li ><a href="explore.php">Explore</a></li>
			                    <li class="scroll active" ><a href="method.php">Method</a></li>
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
		

                <section class="new-section" style="margin-top: 50px; margin-bottom:70px;"><br>
                <h1 class="new-text-shadow">--NETWORKS-- </h1>
               
                <br>
              </section>
         
<style>
  .list-topics-content {
    display: flex;
    justify-content: center;
  }
  .single-list-topics-content {
    text-align: center;
    margin: 0 20px; /* Adjust margin as needed */
  }
</style>

<section id="list-topics" class="list-topics">
  <div class="container">
    <div class="list-topics-content">
      <ul>
        <li ><a href="sl.php">
          <div class="single-list-topics-content">
            <div class="single-list-topics-icon">
              <i class="flaticon-restaurant"></i>
            </div>
            <h2>SL</h2>
            <p></p>
          </div></a>
        </li>
        <li ><a href="sv.php"> 
          <div class="single-list-topics-content">
            <div class="single-list-topics-icon">
              <i class="flaticon-travel"></i>
            </div>
            <h2>SV</h2>
            <p></p>
          </div></a>
        </li>
       <li ><a href="not.php">
          <div class="single-list-topics-content" style="margin-right:20px;">
            <div class="single-list-topics-icon">
              <i class="flaticon-building"></i>
            </div>
            <h2>NOT</h2>
            <p></p>
          </div></a>
        </li>
      </ul>
    </div>
  </div><!--/.container-->
</section>

<style>
        

        .topic {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

		.topic-title {
            color: #46c5d9;
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 15px;
            position: relative;
        }

        .topic-title::after {
            content: "";
            display: block;
            border-bottom: 2px solid #46c5d9;
            margin-top: 8px;
            width: 50%;
        }

        .topic-content {
            line-height: 1.6;
            color: #333;
        }

        .ptag {
            margin-bottom: 10px;
            padding-left: 15px;
            position: relative;
        }

        .ptag::before {
            content: "\2022"; /* Bullet point character */
            color: #46c5d9;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
            position: absolute;
        }
    </style>
	<div style="font-family: Arial, sans-serif;
            max-width: 980px;
            margin: 0 auto;
            padding-bottom:50px">



<div class="topic">
    <div class="topic-title">Data Collection and Processing:</div>
    <div class="topic-content">
        <p class="ptag">1. Protein-protein interaction (PPI) data is sourced from BioGRID.</p>
        <p class="ptag">2. A network of physically interacting proteins is constructed using the "igraph" R package.</p>
        <p class="ptag">3. Self-loops and duplicate interactions are removed to consider only unique interactions.</p>
        <p class="ptag">4. 20 node and pairwise properties are calculated using the constructed PPI network.</p>
    </div> 
</div> 

<div class="topic">
    <div class="topic-title">Data Mapping and Integration:</div>
    <div class="topic-content">
        <p class="ptag"> Gene interactions (GIs) from different sources are mapped onto the PPI network.</p>
        <p class="ptag"> For a given SL pair X and Y, the network property for the pair (NP(XY)) is calculated as the average of NP(X) and NP(Y).</p>
    </div>
</div>

<div class="topic">
    <div class="topic-title">Training and Validation Datasets:</div>
    <div class="topic-content">
        <p class="ptag">Training dataset comprises 70% of GIs from CGIDB, BIOGRID, SLDB, and SVDR, along with NOT data.</p>
        <p class="ptag">The remaining 30% serves as the test data.</p>
        <p class="ptag">Model achieves an accuracy of ~87%.</p>
        <p class="ptag">"varImp" function in the "randomForest" package determines discriminatory features.</p>
        <p class="ptag">"RFE" feature selection algorithm identifies essential features.</p>
        <p class="ptag">Topological properties such as "shortest path," "average betweenness," and "average triangle" significantly contribute to model performance.</p>
    </div>
</div>

<div class="topic">
    <div class="topic-title">MAGICAL Model Incorporating STRING Data:</div>
    <div class="topic-content">
        <p class="ptag"> STRING database provides a broader PPI set with 19624 proteins and 13,715,405 interactions.</p>
        <p class="ptag"> Network is built for STRING proteins, and GIs from CGIdb, BioGRID, and SLDB are mapped.</p>
        <p class="ptag"> NOT data is constructed similarly as discussed earlier.</p>
        <p class="ptag"> Pairwise combinations of proteins are generated, and GIs from all three datasets, along with yeast homologs, are removed.</p>
        <p class="ptag"> A large NOT dataset is created, with 10,000 randomly selected pairs.</p>
        <p class="ptag"> Network properties of these GIs are calculated and used to train the model.</p>
        <p class="ptag"> Model achieves an accuracy of 82.22% for 10-fold cross-validation.</p>
        <p class="ptag"> Among 20 network properties, "average betweenness," "average triangle," "average coreness," and "average neighbor2" are the most discriminatory in classifying the three sets of GIs.</p>
    </div>
</div>
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