

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/svgs/eb-blue-no-clouds.svg">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/top-clouds-mobile.svg?v1">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/top-clouds-animated-desktop.svg?v1">
<!--This loads CSS specific to this page-->

<STYLE>
	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		background-color: #00E6FF;
		background: url(https://ecobricks.org/svgs/top-clouds-mobile.svg?v1) top;
		/*background: url(svgs/cloud-back-logo-blue.svg) top;*/
		background-repeat: no-repeat;
    	background-size: cover;
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;    	
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
      
		text-align: left;
		min-height: 60vh;
		padding: 90px 7% 0px 7%;
		z-index: 5;
		position: relative;
        	background-color: #00E6FF;
		background: url(https://ecobricks.org/svgs/top-clouds-animated-desktop.svg?v2) top #00E6FF;
		background-repeat: no-repeat;
    	background-size: cover;
		text-align: left;
		z-index: 5;
		margin: -3px 0 -20px 0;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 100%;

}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}

@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
	margin: auto;
}
}

@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;
  flex: 25%;
  width: 250px;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}

.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 300;
  text-shadow: 0 0 10px #4c4b4b;
}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 2.5em;
      line-height: 1.2;
      margin: 10px 0px 10px 0px;
  }
}


.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: grey;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.2em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
  }
}

#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #00E6FF;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 1;
	-webkit-transform: skewY(-3deg);
    -moz-transform: skewY(-3deg);
    -ms-transform: skewY(-3deg);
    -o-transform: skewY(-3deg);
    transform: skewY(-3deg);
	margin-bottom: 40px;  
    }


    .module-btn {
  background: var(--emblem-blue);
}
	
.module-btn:hover {
  background: var(--emblem-blue-over);
}

@media (prefers-color-scheme: dark) {
  .splash-content-block {
    filter: brightness(90%);
  }

  .splash-image {
    filter: brightness(110%);
  }

  #splash-bar {
    filter: brightness(90%);
    box-shadow: 0 8px 7px rgba(255, 254, 254, 0.938);
  }
}

	</STYLE>


<?php require_once ("../header-2024.php");?>