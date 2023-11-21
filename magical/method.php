<?php
include 'navbar.html';
?><STYle> 
    
        
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
  gap: 20px;

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
<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt" >
					<h2>Integrative Network Analysis for Predicting Genetic Interactions: Leveraging Experimentally Validated and Predicted Protein-Protein Interactions </h2>
					
				</div>
                <section class="new-section" style="margin-top: 50px;"><br>
                <h1 class="new-text-shadow">--NETWORKS-- </h1>
               
                <br>
              </section>
            </div>
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
        <li ><a href="#">
          <div class="single-list-topics-content">
            <div class="single-list-topics-icon">
              <i class="flaticon-restaurant"></i>
            </div>
            <h2>SL</h2>
            <p>150 listings</p>
          </div></a>
        </li>
        <li ><a href="#"> 
          <div class="single-list-topics-content">
            <div class="single-list-topics-icon">
              <i class="flaticon-travel"></i>
            </div>
            <h2>SV</h2>
            <p>214 listings</p>
          </div></a>
        </li>
       <li ><a href="#">
          <div class="single-list-topics-content" style="margin-right:20px;">
            <div class="single-list-topics-icon">
              <i class="flaticon-building"></i>
            </div>
            <h2>NOT</h2>
            <p>185 listings</p>
          </div></a>
        </li>
      </ul>
    </div>
  </div><!--/.container-->
</section>








































</body>