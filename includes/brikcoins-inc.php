<!--Content Includes Page template: v.1.0.2-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD> 

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/brikcoins-blue.webp">
<link rel="preload" as="image" href="https://ecobricks.org/webp/brikcoins-450px.webp">

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("meta/brikcoins-$lang.php");?>

<?php require_once ("header.php");?>


<STYLE>

/*This sets up the the first splash content block that is unique to the top of each page*/

	
@media screen and (max-width: 700px) { 
	#splash-content-block {
		text-align: left;
		height: 50vh;
		padding: 10vh 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		background: url(webp/brikcoins-blue.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin-top: 50px;

	}
}


@media screen and (min-width: 700px) { 
	#splash-content-block {
		text-align: left;
		min-height: 60vh;
		padding: 20vh 7% 50px 7%;
		z-index: 5;
		position: relative;
		background: url(webp/brikcoins-blue.webp) right top;
    	background-repeat: no-repeat;
    	background-size: contain;
		background-color: #ECECEC;
		margin: 0 0 -20px 0;

}
}


@media screen and (max-width: 700px) { 
#splash-box {
  z-index: 5;
  position: relative;
  width: 100%;
  text-align: left;
}
}

@media screen and (min-width: 700px) { 
#splash-box {
  z-index: 5;
  position: relative;
  width: 80%;
}
}


.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: black;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.8em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 5em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Arvo', Georgia, serif;
  color: grey;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 8px #fff;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.4em;
		line-height: 1.5;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.3em;
		line-height: 1.3;
		font-weight: 400;
		width: 60%;
  }
}


@media screen and (max-width: 769px) {

#splash-box img {

	width: 60%;
	margin-left: 40%;
}
}

#splash-bar {
	background-color: #ECECEC;;
}	

</style>

</head>
							  
											  
<BODY id="full-page">

	  <div id="load-background">
        
	<!-- This loads the page's language specific menu -->

    <?php require_once ("menus/menu-$lang.php");?>
