 <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="<?php include 'lang.php';?>/welcome.php"><img src="logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">IND</button>
            <div class="dropdown-content-language">
              
            <!-- This loads the universal laguage list-->

            <?php require_once ("languages.php");?>
                
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
                  <button class="dropbtn">
                    <div id="menu-circle"><img src="svgs/grey-emblem.svg" width="30px" height="30px" alt="Global Ecobrick Alliance Emblem"></div><div id="menu-text">GEA Servers</div>
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div id="icon-menu">
                            <img src="icons/gobrik.svg" width="65" height="65" loading="lazy" alt="GoBrik logo">
                            </div>
                            <div id="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Webapp untuk ecobrick<br>Kelola ecobrick anda.<br>Packet brikcoins.</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div id="icon-menu"><img src="icons/mattermost.svg" width="65px" height="65px"></div>
                                
                            <div id="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Ikut komunitas ecobrick<br>di platform mattermost<br>kami</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div id="icon-menu"><img src="icons/offset.svg" width="65px" height="65px" loading="lazy"></div>
                            <div id="apptext-menu">
                                <div class="apptext-header">AES Plastic Offsetting </div>
                                <div class="apptext-sub">Offset jejak plastik anda<br>di platform GoBrik AES</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 
        
        <a href="faqs.php">FAQs</a>
        <a href="sequest.php">Sekuestrasi</a>
        <a href="about.php">Tentang Kami</a>
        <div class="dropdown">
        
            <button class="dropbtn">
            <div id="drop-text">Banguan
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="build.php">Metode</a>
                    <a href="/modules">Genis Modul</a>
                    <a href="/earth">Tanah dan Ecobrick</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">Tentang Ecobricks
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what.php">Apa itu Ecobricks</a>
                    <a href="/how">Bagaimana membuat?</a>
                    <a href="/why">Mangapa Ecobricks?</a>
                    <a href="/plastic">Cerita Plastik</a>
                </div>
            </div> 
        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="svgs/grey-emblem.svg"width="30px" height="30px" loading="lazy"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->