<?php
$title = "Angela Castro - Visual Design"; 
require('includes/header.php');
 ?>
	<body>
        <header class="standard-header">
            <a href="index.php" id='logo'><img src="images/ac-logo.svg" alt="Angela Castro Logo"></a>
            <nav><a href="index.php">home</a>
            <a href="work.php">work</a>
            <a href="contact.php">contact</a>
            <a href="about.php">about</a></nav>
        </header>
        <main class='workGallery-VD'>
            <div class="subheader">
                <h1 class='sectionTitle'>Work</h1>
                <a href="javascript:history.back()" class="backArrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.27" height="13" viewBox="0 0 23.3 19.19">
                    <g id="Group_6" data-name="Group 6" transform="translate(-1568.55 -285.166)">
                      <path id="Path_17" class="arrow" data-name="Path 17" d="M7670.6,298.8h-20.8l7.8-7.867" transform="translate(-6080 -4)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                      <path id="Path_18" class="arrow" data-name="Path 18" d="M7652.762,293.875l3.775,3.712" transform="translate(-6079 5)" fill="none" stroke="#474747" stroke-linecap="round" stroke-width="2.5"/>
                    </g>
                  </svg> <span>back</span></a>
            </div>
            <section>
                <div class="boxVD" style="grid-area: header2"><h2>visual <br>design</h2></div>
                <figure style="grid-area: item3VD"><a href="project-vd2.php"><img src="images/thumbs/3DJewels-thumb.jpg" alt="3D Jewels Branding"></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <div class= "colorBoxVD" style="grid-area: item1VD"></div>
                <figure style="grid-area: item2VD"><a href="project-vd1.php"><img src="images/thumbs/outlet-bag-thumb.jpg" alt="SAIT Hospitality Bag Design"></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <figure style="grid-area: item4VD"><a href=""><img src="images/umbrella.jpg" alt=""></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <figure style="grid-area: item5VD"><a href=""><img src="images/converse.jpg" alt=""></a><figcaption>This interesting project, 
                    please click to see it</figcaption></figure>
                <div class="toogleVisible-VD" style="grid-area: item6VD"></div>
                <div class="toogleVisible-VD" style="grid-area: item7VD"></div>
                <!-- filter applied to images -->
                <svg id="svg-filter">
                    <filter id="svg-color">
                      <feColorMatrix in="SourceGraphic" type="matrix" 
                      values="0.89 0 0 0 0
                            0 0.43 0 0 0
                            0 0 0.43 0 0
                            0 0 0 0.7 0"/>
                     </filter>
                </svg>
                <!-- filter applied to images on hover -->
                <svg id="svg-filter-hover">
                    <filter id="svg-color-hover">
                      <feColorMatrix type="matrix" values="0.89 0 0 -0.2 0
                            0 0.43 0 -0.2 0
                            0 0 0.43 -0.2 0
                            0 0 0 0.9 0"/>
                     </filter>
              </svg>
            </section>
        </main>
        <?php
require('includes/footer.php');
 ?>