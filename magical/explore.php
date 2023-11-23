<?php
include 'navbar.html';
?>
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
        font-size: 2.5em;
        text-decoration: underline;
    
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
      text-shadow: 2px 2px 10px ;
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
    
   
    </STYle>

<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>Get GIs from sets of DATA <br> <br></h2>
					<p>
                    This set contains, pairs identified by Experimentally validated PPIs, Predicted PPI and also contains interactions generated from all possible pairwise combination of proteins				</p>
				</div>
				
            <section class="new-section" style="margin-top: 50px;"><br>
                <h1 class="new-text-shadow"> -- PAIRS -- </h1>
                <br>
              </section>
			</div>

		</section>
<section id="list-topics" class="list-topics" >
			<div class="container" style="justify-content:center; display:flex;">
				<div class="list-topics-content">
					<ul>
						<li><a href="#">
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                <i class="material-icons" style="font-size:36px">offline_pin</i>
								</div>
								<h2>Experimental</h2>
								
							</div></a>
						</li>
						
						<li><a href="#">
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
                <i class="material-icons" style="font-size:36px">help_outline</i>
								</div>
								<h2>Predicted</h2>
								
							</div></a>
						</li>
						<li><a href="#">
							<div class="single-list-topics-content" >
								<div class="single-list-topics-icon">
                <i class="fa fa-spinner" style="font-size:36px;"></i>

								</div>
								<h2>All-proteins</h2>
								
							</div></a>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section>
    </body>
    </html>