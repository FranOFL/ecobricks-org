<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='2.46';?>
<?php $page='welcome';?>
<?php include '../ecobricks_env.php';?>


<title>Bienvenue a Ecobricks.org</title>


<!-- 
Ecobricks.org site version 3.0
Developed and made open source by the Global Ecobrick Alliance
See our git hub repository for the full code and to help out:
https://github/globalecobrickalliance/ecobricks.org
-->


<?php require_once ("../includes/welcome-inc2.php");?>


<!-- FEATURED HEADLINE CONTENT -->
    <div class="feature-content-1-anchor-box">
    
    <div class="featured-content-1" >
             <div class="featured-content-shaded-box">
                 <div class="featured-content-text">
                     <div class="featured-content-title" data-lang-id="300-featured-content-1-title">Nouvelle Guide</div>
                     <div class="featured-content-subtitle" data-lang-id="301-featured-content-1-subtitle">Guide en 10 étapes mis à jour pour 2024.</div>

                     <a class="content1-button" href="how.php" data-lang-id="302-featured-content-1-button">Comment faire une écobrique</a>
                 </div>
             </div>
         </div>
        <!-- <div class="buffer" style="height:90px;width:100%"></div> -->
    </div>




<!-- FULL FEATURED GALLERY -->

<div class="featured-content-gallery" style="overflow-x:clip;">

          
            
    
 <!--   <div class="gal-photo">
        <div class="photo-box-end"><a href="brikchain.php">...</a></div>
        <div class="gal-photo-text"></div>
     </div>-->

        <div class="feed-live">
            <p data-lang-id="303-featured-live-brikchain"><span class="blink">⬤  </span>Live brikchain feed of authenticated ecobricks.  Click to preview.</p>
        </div>
        <div class="gallery-flex-container">
        <?php
            $sql = "SELECT * FROM vw_gallery_feed ;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="gal-photo">
                            <div class="photo-box">
                                <img src="' . $row["thumb_url"] . '?v=1" alt="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" title="Ecobrick ' . $row["ecobrick_unique_id"] . ' by ' . $row["ecobrick_owner"] . ' in ' . $row["location"] . '" loading="lazy" onclick="ecobrickPreview(\'' . $row["ecobrick_unique_id"] . '\', \'' . $row["weight_in_g"] . '\', \'' . $row["ecobrick_owner"] . '\', \'' . $row["location"] . '\')"/>
                            </div>
                        </div>';
                }
            } else {
                echo "Failed to connect to the Brikchain database";
            }
?>


        <div class="photo-box-end" href="brikchain.php"></div>
</div>

     <!-- <div class="gal-photo" style="width: 200px; padding-bottom: 20px; text-align: left; margin-bottom: auto;"><div class="feed-live"><p><span class="blink">⬤ Live Feed:</span>
     50 latest selfie briks = 34kg plastic sequestered / 150kg CO2e / 340 BRK generated</p></div></div> -->
    

    
    <div class="feature-content-box">

        <div class="feature-big-header" data-lang-id="304-featured-live-heading">Ecobricking.  Live.</div>
        <div class="feature-sub-text" data-lang-id="305-featured-live-subheading">Ecobricks are being made, logged and validated around the world right this moment.  Each authenticated ecobrick is published onto our Brikcoin manual blockchain.</div>

        <a class="btn featured-content-button" href="brikchain.php" data-lang-id="306-featured-live-button">⛓️ The Brikchain</a>

            <div class="feature-reference-links"><h6 data-lang-id="307-featured-live-links"><a href="brikchain.php">About AES Plastic</a> | <a href="/brikcoins">About Brikcoins</a></h6></div>
    </div>

</div>




    <div class="featured-content-2"  >
    
        <div class="feature-content-box">

            <div class="featured-content-img dolphin-pic"></div>
            
            <div class="feature-big-header" data-lang-id="308-featured-2-heading">Keep Your Plastic Safe</div>
            <div class="feature-sub-text" data-lang-id="309-featured-2-subheading">
            When plastic gets loose into the biosphere it contaminates and poisons.  When plastic is processed by industry it encourages more plastic to be produced.  Ecobricking is a simple, non-capital methodology to keep your plastic safe and secure so that it can be put to good, green use.</div>
            <button type="button" class="feature-button" data-lang-id="310-featured-2-button" onclick="guidedTour()">Intro to Ecobricking</button>

            <div class="feature-reference-links" data-lang-id="311-featured-2-references">
                <h6>
                <a href="what.php">Basics</a> | <a href="transition.php">Plastic Transition</a> | <a href="how.php">How to Make</a></h6>
            </div>
        </div>
    </div>




<!-- TOP TEN GALLERY-->

<div class="featured-content-top10s" style="overflow-x:clip;">
    <div class="gallery10-content-block">             
        <div class="flex-container10">
            
            <?php
            $sql = "SELECT * FROM vw_top_10_last_month ;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

            echo '
            <div class="gal-photo10">
            <a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["ecobrick_full_photo_url"].'?v=1" loading="lazy" alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"></a>';
            echo '<div class="gal10-photo-text"><b>Ecobrick '.$row["ecobrick_unique_id"].'</b><br>By '.$row["ecobrick_owner"].'<br>'.$row["location"].'</div></div>';

            }

            } else {
            echo "Failed to connect to the Brikchain database";
            }

            ?>
                
        </div>
    </div>
    <div class="feature-content-box">
    <!-- <a href="sequest.php" class="feature-button" data-lang-id="308-featured-3-button">Brikchain</a> -->
        <div class="feature-big-header" data-lang-id="312-top10s-title">Monthly Top Tens</div>
        <div class="feature-sub-text" data-lang-id="313-top10s-subtitle">Every month thousands of ecobricks are logged by ecobrickers around the world-- and peer review by them too!</div>

         <a href="top-tens.php" class="feature-button"  data-lang-id="313-top10s-button">🏆 Monthly Rankings</a>

            <div class="feature-reference-links"><h6 data-lang-id="314-top10s-references"><a href="top-tens.php">Brikchain</a> | <a href="/brikcoins">Brikcoins</a></h6></div>
    </div>
    
</div>

    <div class="featured-content-3"  >
        <div class="feature-content-box">
            <div class="featured-content-img ecovillage-pic"></div>
            <div class="feature-big-header" data-lang-id="315-featured-3-heading">Put Plastic to Good Use</div>
            <div class="feature-sub-text" data-lang-id="316-featured-3-subheading">
            Ecobricks turn problematic plastic into reusable blocks.  With our ecobricks we can build great and green.  From furniture, to gardens, to structures ecobrick outputs embody the principle of spiral design.  Your plastic isn't a problem-- its the start of the solution.</div>

            <a href="build.php" class="feature-button" data-lang-id="317-featured-3-button">🔨Ecobrick Building</a>
            
            <div class="feature-reference-links"><h6 data-lang-id="318-featured-3-references"><a href="earth.php">Earth Building</a> | <a href="/earth-methods">Earth Methods</a> | <a href="modules.php">Furniture Modules</a> | <a href="spiral.php">Spiral Design</a> | <a href="/openspace/">Open Spaces</a> | <a href="/fire/">Fire Safety</a></h6></div>
        </div>
    </div>


 <!--FOURTH CONTENT SECTION-->


    <div class="featured-content-4"  >
        <div class="feature-content-box">
            <div class="featured-content-img earthservice-pic"></div>
            <div class="feature-big-header" data-lang-id="319-featured-4-heading">Following Earth's Example</div>
            <div class="feature-sub-text" data-lang-id="320-featured-4-subheading">
            Our ecobricking is inspired by the Igorot people of Northen Luzon, where the Global Ecobrick Alliance was founded.  Guided by their Ayyew ethos, ecobricking is fundamentally distinct from western concepts of sustainability and zero-waste.</div>
            <a href="principles.php" class="feature-button" data-lang-id="321-featured-4-button">🌏 Our Earthen Principles</a>
            <div class="feature-reference-links"><h6 data-lang-id="322-featured-4-references"><a href="spiral.php">Spiral Design</a> | <a href="/ayyew/">Ayyew </a> | <a href="about.php">About Us</a> | <a href="/story/">GEA story</a></h6>
            </div>
        </div>
    </div>
    



    
  
<!--FOOTER STARTS-->

<?php require_once ("../footer-2024.php");?>


</div>  <!--ends page content-->


<script>
    function slowScrollLeft(element, distance, duration) {
        const start = element.scrollLeft;
        const galleryWidth = element.scrollWidth; // Get the total width of the gallery
        let startTime = performance.now();

        function scroll(timestamp) {
            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            element.scrollLeft = start + distance * progress;

            if (progress < 1) {
                requestAnimationFrame(scroll);
            } else {
                // Reset scroll position to the beginning when it reaches the end
                element.scrollLeft = 0;
                startTime = performance.now();
                requestAnimationFrame(scroll);
            }
        }

        requestAnimationFrame(scroll);
    }

    const galleryBlock = document.querySelector('.gallery10-content-block');
    const galleryWidth = galleryBlock.scrollWidth; // Get the total width of the gallery
    slowScrollLeft(galleryBlock, galleryWidth, 45000); // Scroll the full width over 15000 milliseconds

</script>

<script>
   function ecobrickPreview(brik_serial, weight, owner, location) {
        // Construct the image source URL
        var imageUrl = 'https://ecobricks.org/briks/ecobrick-' + brik_serial + '-file.jpeg';
        
        // Open a modal with the ecobrick image and link to details-ecobrick-page
        var modal = document.createElement('div');
        modal.className = 'ecobrick-modal';
        modal.innerHTML = '<span class="close-modal" onclick="closeEcobrickModal()">&times;</span>' +
                          '<img src="' + imageUrl + '" alt="Ecobrick ' + brik_serial + '" />' +
                          '<div class="ecobrick-details">' +
                          '   <p>Ecobrick ' + brik_serial + ' | ' + weight + 'g of plastic sequestered by ' + owner + ' in ' + location + '.</p>' +
                          '</div>' +
                          '<a style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;" class="btn featured-gallery-button" href="details-ecobrick-page.php?serial_no=' + brik_serial + '">ℹ️ View Full Details</a>';
        
        // Append the modal to the body
        document.body.appendChild(modal);
    }

    function closeEcobrickModal() {
        // Close the modal by removing it from the DOM
        var modal = document.querySelector('.ecobrick-modal');
        if (modal) {
            modal.parentNode.removeChild(modal);
        }
    }
</script>


</body>


</html>

