<?php
?>

<!doctype html>

<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="viewport" content="width=device-width, intial-scale=1.0" />
                <title>Janelle Contreras portfolio</title>
                <meta name="description" content="Web developer programmer Janelle Contreras"/>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script> 
                
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="css/screen.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        </head>
        <body class="secondVersion">
                <div class="topBackground">
                        <div class="headerRow">
                                <div class="col-sm-8 headerItem">
                                        Janelle Contreras
                                </div>
                                <div class="col-sm-4 headerItem">
                                        <i class="fa fa-linkedin-square fa-5x"></i>
                                </div>
                        </div>
                </div>
                <div class="bodywrap">
                        <div class="mainNav">
                                <ul class="mainNavItems">
                                        <li class="tabItem menuItemSelected" id="liskills">Skills</li>
                                        <li class="tabItem" id="liexperience">Work experience</li>
                                        <li class="tabItem" id="lidream">Dream</li>
                                        <li class="tabItem" id="liabout">About</li>
                                </ul>
                        </div>
                        <div class="mobileNav">
                                <div class="sandMenu"><i class="fa fa-bars fa-3x menuSandwhich"></i></div>
                                <div class="mobileItems" style="display:none">
                                        <div class="tabItem menuItemSelected" id="liskills">Skills</div>
                                        <div class="tabItem" id="liexperience">Work experience</div>
                                        <div class="tabItem" id="lidream">Dream</div>
                                        <div class="tabItem" id="liabout">About</div>
                                </div>
                        </div><!-- mainNav -->
                        <div class="panelWrap selected" id="skills">
                                <div class="row sectionHeading">
                                        <div class="col-xs-3">
                                                <img src="./images/suncar.jpg">
                                        </div>
                                        <div class="col-xs-9">
                                                <div class="sectionTitle">
                                                        <h2>What can I do?</h2>  
                                                        <p><strong>ANYTHING!</strong> First and formost I love to learn.  You give me a challenge and I will take it on with gusto. </p> 
                                                        <p>For example, I built this site as an Amazon web server with Ubuntu Linux, Apache for a server, MySQL as the database and Php of course.  
                                                                I pointed it to my domain name using Route 53.
                                                                The content is stored in a repo up on github which has a webhook to call a deploy script on my webserver whenever I push new content from my local machine.  
                                                                This script then goes and grabs the current site content.  Pretty basic setup that we use currently on most projects within my current company.
                                                                This project also uses sass for the css.  The sass code is compiled using codekit.
                                                        </p>
                                                </div>
                                        </div>
                                </div><!-- sectionHeading -->
                                <div class="row sectionText">
                                        
                                </div><!-- sectionText -->
                                <div class="logosRow">
                                        <div class="logoBlock">
                                                <img src="./images/logos/apache-logo-v2.png">
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/php_mysql_logo.jpg"/>                                               
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/ubuntu.png"/>
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/oscon2014_logo.png"/>
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/codekit-logo-dark@2x.png"/>
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/sass.png"/>
                                        </div>
                                        <div class="logoBlock">
                                                <img src="./images/logos/github-logo.png"/>
                                        </div>
                                </div>
                                
                        </div><!-- panelWrap -->
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
                                                <div class="sectionBar">
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
                </div>
                <div class="bottomBackground">

                </div>
        </body>
        <script type="text/javascript">
                $('.tabItem').click(function() {
                        var theId = $(this).attr('id');
                        theId = theId.replace("li", "");

                        // updating menu
                        var oldTab = $('.menuItemSelected');
                        oldTab.removeClass('menuItemSelected');

                        $(this).addClass("menuItemSelected");

                        // updating page
                        var oldPanel = $('.selected')
                        oldPanel.removeClass("selected")
                        
                        var newPanel = $('#' + theId);
                        newPanel.addClass("selected");
                });

                $('.windowwidth').click(function(){
                        alert("width= "+$(window).width());
                });

                $('.menuSandwhich').click(function() {
                        $('.mobileItems').slideToggle(350);
                });


        </script>
</html>