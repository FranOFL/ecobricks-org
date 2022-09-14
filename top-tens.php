<!--PAGE LANGUAGE:  ENGLISH
Content Page template: v.1.0.0-->
   
<!-- TRANSLATORS:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->
 
<?php require_once ("includes/build-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<?php require_once ("under-construction.php");?>
<!--TOP PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Ecobrick Top 10</div>
	    <div class="splash-sub">This months highest ranked authenticated ecobricks!</div>
	</div>
	<div class="splash-image"><img src="https://ecobricks.org/pngs/gobriktrophy.png" style="width: 85%">
    <!--https://ecobricks.org/svgs/eb-blue-no-clouds.svg-->
    </div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>Every month we feature the ecobricks that received the highest authentication scores from the global ecobrick community.</p>
			</div>
	
			<div class="page-paragraph">
                <p>And here they are...</p>
            </div>	

            <?php include 'ecobricks_env.php';?> 
            


<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

       

        // output data of each row
        while($row = $result->fetch_assoc()) {

            $row = $result->fetch_assoc();
            
            echo '<a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="https://ecobricks.org/briks/ecobrick-'.$row["ecobrick_unique_id"].'-file.jpeg" width="600px" alt="Ecobrick '.$row["ecobrick_unique_id"].' basic pic"/></a>';
            echo '<h4>Ecobrick of the Month!</h4>
            <h5><a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].'</a> made the top tens this month with a validation score of '.$row["final_validation_score"].'</h5><br>
            
            <a class="module-btn" href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Check it out</a>';
            echo '<br><br><br><br><hr><br>';
            
        
        }
        
        } else {
            echo "Failed to connect to database";
        }
        
        ?>
            
        <?php 	$conn->close();?>
        

            <br>
                 
            <div class="row">
                
                <div class="main2">
                    <div class="page-paragraph-reg">
                 
                        <h4>Learn how to make a great ecobrick!</h4>
                        
                         <p>Making a great ecobrick isn't easy.  It requires technique, patience and prepared plastic!  See our twelve step ecobrick guide to up your sequestration game.</p>
                    
                        <br><p>
                    
                        <a class="action-btn" href="how">🚀 How to Make an Ecobrick</a>
                        <p style="font-size: 0.85em; margin-top:20px;">Our comprehensive 12 step guide.</a></p>    
                    
                    </div>
                </div>

                <div class="side2">
                    <br><img src="webp/road-500px.webp" width="100%" alt="eco brick road into the distance" loading="lazy" alt="eco brik are a form of sequestering plastic safely through time.">
                </div>
            </div>
</div>



    
	

		<div class="side">
	
			
            <div id="side-module-desktop-mobile">
                <img src="webp/tens-thousands.webp" width="100%" loading="lazy" alt="eco brik and earth building can make tree benches">
                <h4>Plastic Sequestration</h4>
                <h5>The GEA advocates ecobrick building to sequester plastic.  Only builds that follow best-practices, embody earth principles and use authenticated eco<span class="eco-brick"> </span>bricks sequester plastic.</h5><br>
                <a class="module-btn" href="sequest.php">Learn More</a>
            </div>

			<div id="side-module-desktop-mobile">
				<img src="webp/earthhome-400px.webp" width="100%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Plastic Transition</h4>
				<h5>Ecobrick building is a transition technology. Rather than see plastic as ‘waste’ we see it as a building block for our green visions.</h5><br>
				<a class="module-btn" href="transition.php">Learn More</a>
			</div>

			

            <div id="side-module-desktop-mobile">
				<img src="webp/spiral-circular-400px.webp" width="80%" loading="lazy" alt="eco brik applications are circular and spiral in design">
				<h4>Circular Design</h4>
				<h5>Ecobrick applications follows the principles of circular design to put our plastic into indefinite greening cycles of reuse.</h5><br>
				<a class="module-btn" href="/circular">Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="pngs/transcaste-500px.png" width="80%" loading="lazy" alt="eco brick transcaste construction and building briks.">
				<h4>Transcate Collaboration</h4>
				<h5>In contrast to conventional construction, Earth and ecobricking building is transcaste, meaning that it is accessible to men and women, young and old, black and white, and everyone in between!</h5><br>
				<a class="module-btn" href="principles.php">Learn More</a>
			</div>
            
         

            

		</div>

	</div>

</div>


	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="accordion-scripts.js" defer></script>


</div>
</body>
</html>