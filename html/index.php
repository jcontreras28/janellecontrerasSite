<?php
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

        <div class="panelWrap" id="experience">
                <div class="row sectionHeading">
                        <div class="col-md-3">
                                <img src="./images/fishin.jpg">
                        </div>
                        <div class="col-md-9">
                                <div class="sectionTitle">
                                        Is this work?
                                </div>
                                <div class="sectionBar">
                                </div>
                        </div>
                </div><!-- sectionHeading -->
                <div class="row sectionText">
                        <p><strong>Employment history</strong></p> 
                        <p>This will look different
                        </p>
                </div><!-- sectionText -->
                                
                <div class="windowwidth">click for window width</div>
        </div><!-- panelWrap -->
        <div class="panelWrap" id="dream">
                <div class="row sectionHeading">
                        <div class="col-md-3">
                                <img src="./images/oscon.jpg">
                        </div>
                        <div class="col-md-9">
                                <div class="sectionTitle">
                                        What is my dream?
                                </div>
                        </div>
                </div><!-- sectionHeading -->
                <div class="row sectionText">
                        <p><strong>Open source for all!</strong> Love going to OSCON</p> 
                        <p>Build amazing fun software!
                        </p>
                </div><!-- sectionText -->
                <div class="">
                        <img src="./images/logos/all-logos.png" style="width: 50%"/>
                </div>
                <div class="windowwidth">click for window width</div>
        </div><!-- panelWrap -->
        <div class="panelWrap" id="about">
                <div class="row sectionHeading">
                        <div class="col-md-3">
                                <img src="./images/softball.jpg">
                        </div>
                        <div class="col-md-9">
                                 <div class="sectionTitle">
                                        Who am I?
                                </div>
                                <div class="sectionBar">
                                </div>
                        </div>
                </div><!-- sectionHeading -->
                <div class="row sectionText">
                        <p><strong>Amazing!</strong> First and formost I love to learn.  You give me a challenge and I will take it on with gusto. </p> 
                        <p>I love sports!
                        </p>
                </div><!-- sectionText -->
                <div class="windowwidth">click for window width</div>
        </div><!-- panelWrap -->
        <div class="panelWrap" id="contactForm">
                <!-- Contact Form -->
                <div class="contactcontent">
                        <div id="contact-form">
                                <form action="http://janellecontreras.com/sendMess.php" id="contactform" method="post" class="contactsubmit">
                                        <div class="topRow">
                                                <div class="nameField">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" id="name" minlength="2" size="22" tabindex="1" class="required" required/>
                                                </div>
                                                <div class="emailField">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" size="22" tabindex="1" class="required email" required/>
                                                </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="messageRow">
                                                <label for="message">Message</label><br>
                                                <textarea name="message" id="message" cols="100%" rows="8" tabindex="3" class="required" required></textarea>
                                        </div>
                                        <p class="subButton">
                                            <label for="submit"></label>
                                            <input type="submit" name="submit" id="submit" class="button" value="Send Message"/>
                                        </p>
                                        <input type="hidden" name="csubmitted" id="csubmitted" value="true" />
                                </form>
                                <script>
                                        $("#contactform").validate();
                                </script>
                        </div>
                        <div class="clear"></div>
                </div>
                <!-- END Contact Form --> 
        </div><!-- panelWrap -->
        <div class="panelWrap" id="gitRepo">
                <!-- Contact Form -->
                <div class="contactcontent">
                        Git Repositories.
                </div>
                <!-- END Contact Form --> 
        </div><!-- panelWrap -->

        <div class="bottomBackground">
        </div><!-- bottomBackground -->
        <?php require 'footer.php'; ?>
    </body>

    <?php require 'javscripts.php'; ?>

</html>






