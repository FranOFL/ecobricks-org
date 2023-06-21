  <!--ESPANOL-->
  
  <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="https://ecobricks.org/es/welcome.php"><img src="https://www.ecobricks.org/logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">ES</button>
            <div class="dropdown-content-language">
              
            <!-- This loads the universal laguage list-->

            <?php require_once ("languages.php");?>
                
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
    <div class="dropdown">
                  <button type="button" aria-label="GEA service menu" class="dropbtn" id="menu-circle"><img src="svgs/grey-emblem.svg" width="30" height="30" alt="Buka site menu"><!--<span class="menu-text">GEA Servers</span>-->
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div id="icon-menu">
                            <img src="icons/gobrik.svg" width="65" height="65" loading="lazy" alt="GoBrik logo">
                            </div>
                            <div id="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Ecobricking Webapp<br>Gestion tus ecobricks<br>Conéctese a la cadena Brikcoin.</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div id="icon-menu"><img src="icons/mattermost.svg" width="65px" height="65px"></div>
                                
                            <div id="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Únete a nuestra comunidad ecoladrillera<br>Comparte tu ecobriking<br>Aprende de los demás</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div id="icon-menu"><img src="icons/offset.svg" width="65px" height="65px" loading="lazy"></div>
                            <div id="apptext-menu">
                                <div class="apptext-header">Compensación de plástico</div>
                                <div class="apptext-sub">Compensa tu huella plástica<br>en nuestra plataforma GoBrik</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 

        <a href="faqs.php">FAQ</a>
     
     <a href="transition.php">Transición plástica</a>


     <div class="dropdown">
         <button class="dropbtn">
         <div id="drop-text">Nosotros
               <i class="fa fa-caret-down"></i></div>
             </button>
             <div class="dropdown-content-normal">
                 <a href="about.php">Global Ecobrick Alliance</a>
                 <a href="principles.php">Principios</a>
                 <a href="brikchain.php">Explorador de Brikchain</a>
                 <a href="open-books.php">Open Books</a>
                 <a href="ayyew">Moral Ayyew</a>
                 <a href="ayyew">Colaboración mandalica</a>
                 <a href="movement">El movimiento</a>
             </div>
         </div>


     <div class="dropdown">
         <button class="dropbtn">
         <div id="drop-text">Construcción
               <i class="fa fa-caret-down"></i></div>
             </button>
             <div class="dropdown-content-normal">
                 <a href="build.php">Métodos</a>
                 <a href="/modules">Módulos</a>
                 <a href="/earth">Tierra & Ecobricks</a>
                 <a href="/openspaces">Open Spaces</a>
                 <a href="brickable.php">Diseño Brickable</a>
             </div>
         </div>

         <div class="dropdown">
             <button class="dropbtn"><div id="drop-text">Los Ecobricks
               <i class="fa fa-caret-down"></i></div>
             </button>
             <div class="dropdown-content-normal">

             <div class="dropdown-content-normal">
                    <a href="what.php">¿Qué es?</a>
                    <a href="/how">¿Cómo hacer?</a>
                    <a href="/why">¿Por qué ecoladrillos?</a>
                    <a href="/plastic">Historia del plástico</a>
                    <a href="principles.php">Principios</a>
                    <a href="sequest.php">Secustro Plastico</a>
                    <a href="/fire">Seguridad contra incendios</a>
                </div>
                
         </div> 

        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="svgs/grey-emblem.svg"width="30px" height="30px" loading="lazy"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->