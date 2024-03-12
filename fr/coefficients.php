
<!DOCTYPE html>
<HTML lang="fr"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='fr';?>
<?php $version='1.6';?>
<?php $page='coefficients';?>


<?php require_once ("../includes/coefficients-inc2.php");?>

<!--SPLASH SECTION-->

<!-- <div class="splash-content-block">
    <div class="splash-text-box">
        <div class="splash-heading" data-lang-id="001-splash-heading">Plastic Coefficients</div>
        <div class="splash-sub" data-lang-id="002-splash-sub">For Ecological Accounting</div>
    </div>
    <div class="splash-image" data-lang-id="003xx-splash-image"><img src="../webp/gea-perspective-400px.webp" style="width: 75%;"></div>   
</div>
<div id="splash-bar"></div> -->

<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading" data-lang-id="001-splash-title">About Us</div>
	    <div class="splash-sub" data-lang-id="002-splash-subtitle">The Global Ecobrick Alliance</div>
	</div>
	<div class="splash-image" data-lang-id="003-splash-image-alt"><img src="../webp/gea-perspective-400px.webp" style="width: 85%" alt="How to build with ecobricks">
    </div>	
</div>
<div id="splash-bar"></div>

<!-- PAGE CONTENT-->

<div id="main-content">
    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="main">

            <div class="lead-page-paragraph">
                <p data-lang-id="006-lead-paragraph">The Global Ecobrick Alliance maintains and publish coefficients for plastic consumption, production and CO2 equivalency for enterprises who are tracking and disclosing their plastic impacts.</p>
            </div>

            <div class="page-paragraph">
                <p data-lang-id="007-page-paragraph-1">In 2021 the GEA began a compendium of plastic generation coeffecients based on the extensive experience of our 400 trainers working with plastic around the world.</p>
                <p data-lang-id="008-page-paragraph-2">As of June 2022, this page and our listing here are still in development with the aim of formalizing our coefficients for the end of the year.</p>
            </div>

            <div class="reg-content-block" id="block1">
                <div class="opener-header">
                    <div class="opener-header-text">
                        <h4 data-lang-id="009-additive-coefficients-title">Additive Plastic Coefficients</h4>
                        <h5 data-lang-id="010-additive-coefficients-subtitle">Impacts that add plastic to the biosphere.</h5>
                    </div>
                    <button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
                </div>

				<div id="preclosed1">
			<br>

			<h3 data-lang-id="012-plastic-production-title">Plastic Production</h3>

			<h5 data-lang-id="013-plastic-production-subtitle"><i>Plastic generated outside of or sent outside of your facilities.</i></h5>
			
			<p data-lang-id="014-take-out-coffee-label"><b>Take-out Coffee</b></p>
			
			<p data-lang-id="015-take-out-coffee-description">The average plastic generated by one coffee to-go (including cup, lid, sugar packet lining, stirrer, etc.)</p> 

			<span title="GEA Estimate, 2020" data-lang-id="016-take-out-coffee-estimate"><h5>0.01 Kg plastic</h5></span><br>

			<p data-lang-id="017-take-out-meal-label"><b>Take-out Meal</b></p>
			
			<p data-lang-id="018-take-out-meal-description">The average plastic generated by a meal at a restaurant taken to go (including plastic used in the kitchen, for presentation, take out, drinks, etc.)</p> 

			<span title="GEA Estimate, 2020" data-lang-id="019-take-out-meal-estimate"><h5>0.125 Kg per meal</h5></span><br>

			<p data-lang-id="020-domestic-air-travel-label"><b>Domestic Air Travel</b></p>
			
			<p data-lang-id="021-domestic-air-travel-description">The average amount of plastic generated by a single domestic air travel flight (ticket, stickers, food and drink service, snacks, meal, etc.).</p> 

			<span title="GEA Estimate" data-lang-id="022-domestic-air-travel-estimate"><h5>0.550 kg per ticket</h5></span><br>

			<p data-lang-id="023-international-air-travel-label"><b>International Air Travel</b></p>
			
			<p data-lang-id="024-international-air-travel-description">The average amount of plastic generated by a single international air travel flight (ticket, stickers, food and drink service, snacks, meal, etc.)</p> 

			<span title="GEA Estimate" data-lang-id="025-international-air-travel-estimate"><h5>0.750 kg per ticket</h5></span><br>
			<br><br><hr>

			<h3 data-lang-id="026-plastic-consumption-title">Plastic Consumption</h3>
			<h5 data-lang-id="027-plastic-consumption-subtitle"><i>Plastic generated within your facilities.</i></h5>

			<p data-lang-id="028-propane-gas-label"><b>Propane Gas</b></p> 
			
			<p data-lang-id="029-propane-gas-description">Plastic involved in the consumption of one LPG tank (any size)</p> 

			<span title="GEA Estimate" data-lang-id="030-propane-gas-estimate"><h5>0.001 Kg of plastic per cannister</h5></span><br>

			<p data-lang-id="031-laptop-label"><b>Laptop</b></p>
			
			<p data-lang-id="032-laptop-description">The purchase and use of a laptop entails plastic generation (packaging, cables, casing, screen, keyboard, etc)</p> 

			<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020" data-lang-id="033-laptop-estimate"><h5>0.5 Kg over lifetime of use</h5></span><br>

			<p data-lang-id="034-smart-phone-label"><b>Smart Phone</b></p>
			
			<p data-lang-id="035-smart-phone-description">The purchase and use of a smart phone entails plastic generation (packaging, cables, casing, screen, keyboard, etc)</p> 

			<span title="Examining the Carbon Footprint of Devices, Microsoft, Sustainable Software, 2020" data-lang-id="036-smart-phone-estimate"><h5>0.4 Kg over lifetime of use</h5></span><br>
		</div>
	</div>



<div class="reg-content-block" id="block2">
    <div class="opener-header">
        <div class="opener-header-text">
            <h4 data-lang-id="037-subtractive-coefficients-title">Subtractive Plastic Coefficients</h4>
            <h5 data-lang-id="038-subtractive-coefficients-subtitle">Impacts that remove plastic from the biosphere</h5><br>
        </div>
        <button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2" data-lang-id="039-block-toggle">+</button>
    </div>

    <div id="preclosed2">
        
        <p data-lang-id="040-recycling-label"><b>Recycling</b></p>
            
        <p data-lang-id="041-recycling-description">The global average for full recovery and ongoing reuse of recyled plastic is 9%.  Enterprise's should track the percentage of their plastic production and consumption that is recycled and then multiply accordingly.</p> 

        <span title="https://advances.sciencemag.org/content/3/7/e1700782" data-lang-id="042-recycling-estimate"><h5>0.09 Kg per 1 Kg of recycled plastic</h5></span><br>

        <p data-lang-id="043-aes-plastic-label"><b>AES Plastic</b></p>
            
        <p data-lang-id="044-aes-plastic-description">Plastic that has been ecobricked and authenticated as having met the criteria of plastic sequestration, can be claimed as authenticated Ecobrick Sequestered Plastic.</p> 

        <span title="GEA Certified" data-lang-id="045-aes-plastic-estimate"><h5>1kg of AES plastic = 1 Kg of plastic removed from the biosphere</h5></span><br>

        <p data-lang-id="046-1-brikcoin-label"><b>1 Brikcoin</b></p>
            
        <p data-lang-id="047-1-brikcoin-description">A brikcoin on the GoBrik blockchain corresponds to a certain amount of plastic sequestered.  This changes each year.</p> 

        <span title="GEA 2021 value" data-lang-id="048-1-brikcoin-estimate"><h5>1 BRK = 0.098 Kg plastic</h5></span><br>
                    
    </div>
</div>

			
			<a name="co2"></a>
			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Plastic CO2 Equivalencies</h4>
					<h5>Various flows of plastic have significant carbon emissions.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>

					<p><b>Recycling</b></p>
					
					<p>Recycling plastic has various carbon emissions (transportation, reprocessing, etc.)</p> 

					<span title="GEA Certified"><h5>1kg recycled plastic = 0.689 Kg of CO2</h5></span>
					<p style="font-size: 0.85em; margin-top:20px;"><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</p><br>

					<p><b>Incineration</b></p>
					
					<p>When plastic is burned it's carbon molecules join with oxygen molecules to generate carbon dioxide.</p> 

					<span title="GEA 2020 value"><h5>1 kg plastic = 2.97 Kg CO2</h5></span>
					<p style="font-size: 0.85em; margin-top:20px;"><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</p><br>

					<p><b>Landfilling</b></p>
					
					<p>Plastic that is not recycled, incinerated or sequestered ends up in the earth, air and land.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = 0.065kg </h5></span>
					<p style="font-size: 0.85em; margin-top:20px;"><a href="https://www.ciel.org/wp-content/uploads/2019/05/Plastic-and-Climate-FINAL-2019.pdf" target="_blank">Reference:</a> Plastic & Climate: The Hidden Costs of a Plastic Planet, Center for International Environmental Law p.59 (offsets not counted)</p><br>

					<hr>
					<br>
					<p><b>One-time CO2 impact of plastic</b></p>
					
					<p>The GEA has calculated the one time impact of consuming 1 kg of consumed plastic.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = 6.06kg CO2</h5></span><br>

					<p>The GEA has calculated the net impact of 1 kg of consumed plastic over time.</p> 

					<span title="GEA 2020 value"><h5>1 Kg plastic = Data pending</h5></span><br>

					<p><b>Plastic Sequestration</b></p>
					
					<p>Plastic that is kept out of industrial processing (i.e recycling, incineration and landfilling) has a substractive CO2e ipact of:</p> 

					<span title="GEA 2020 value"><h5>1 AES Plastic = 6.05 CO2e</h5></span><br>

					<img src="https://miro.medium.com/max/500/1*p4H-oNd9oUZvmJD4VjcERg.png" width="90%">

				</div>
			</div>



		
				
			<br><br>

<div class="page-paragraph">
    <h4>Do your own Regen Reporting</h4>

    <p>To do our own <a href="regenreports.php">GEA ecological accounting</a> we use an <a href="catalyst.php"> enterprise catalyst account</a> on the GoBrik platform.  It allows us to track our plastic consumption and ecobricking each month. You can do so too!</p>
    
    <p>Our Catalyst Program for keen green enterprises enables you to generate ecological impacts for your company or project.  New tools for carbon and biodiversity accounting are being added for 2022.</p><br>
            
    <a class="action-btn" href="catalyst.php">🚀 Catalyst Program</a>
    <p style="font-size: 0.85em; margin-top:20px;">Learn more about our free program & platform.</a></p>
</div>


		

		
		</div>

		<div class="side">

		
	
        <?php require_once ("side-modules/eco-accounting.php");?>

		<?php require_once ("side-modules/eco-accounting-principle.php");?>

		<?php require_once ("side-modules/for-earth.php");?>

        <?php require_once ("side-modules/plastic-co2e.php");?>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system-->
<script src="../accordion-scripts.js?v=2" defer></script>


</div>
</body>
</html>

