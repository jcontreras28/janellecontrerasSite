<?php
    if(isset($_GET["pageType"])) {
        $pageType = $_GET["pageType"];
    } else {
        $pageType = "skills";
    }
?>

<!doctype html>

<html>
    <head>
        <?php require 'header.php';?>
    </head>

    <body class="secondVersion">
        
        <?php require 'masthead.php'; ?>

        <div class="bodywrap">
        
            <?php require 'navigation.php';?>
                        
            <?php require 'skillsPanel.php'; ?>

            <?php require 'experiencePanel.php'; ?>

            <?php require 'dreamPanel.php'; ?>

            <?php require 'about.php'; ?>

            <?php require 'contactForm.php'; ?>

            <?php require 'thankyou.php'; ?>

            <div class="panelWrap" id="gitRepo">
                    <!-- Contact Form -->
                    <div class="contactcontent">
                            Git Repositories.
                    </div>
                    <!-- END Contact Form --> 
            </div><!-- panelWrap -->
        </div><!-- bodyWrap -->

        <div class="bottomBackground">
        </div><!-- bottomBackground -->

        <?php require 'footer.php'; ?>
       
        <?php require 'javascripts.php'; ?>
    </body>
     
    

</html>






