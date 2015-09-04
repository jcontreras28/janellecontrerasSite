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
        </head>
        <body>
                <div class="mainBodyWrap">
                        <div class="mainNav">
                                <ul>
                                        <li class="tabItem menuItemSelected" id="liskills">Skills</li>
                                        <li class="tabItem" id="liabout">About</li>
                                        <li class="tabItem" id="liexperience">Work experience</li>
                                        <li class="tabItem" id="lidream">Dream</li>
                                </ul>
                        </div><!-- mainNav -->

                        <div class="panelWrap selected" id="skills">
                                <div class="row sectionHeading">
                                        <div class="col-md-3">
                                                <img src="./images/suncar.jpg" width="95%">
                                        </div>
                                        <div class="col-md-9">
                                                <div class="sectionTitle">
                                                        What can I do?
                                                </div>
                                                <div class="sectionBar">
                                                </div>
                                        </div>
                                </div><!-- sectionHeading -->
                                <div class="row sectionText">
                                        <p><strong>ANYTHING!</strong> First and formost I love to learn.  You give me a challenge and I will take it on with gusto. </p> 
                                        <p>For example, I built this site as an Amazon web server with Ubuntu Linux, Apache for a server, MySQL as the database and Php of course.  
                                                I pointed it to my domain name using Route 53.
                                                The content is stored in a repo up on github which has a webhook to call a deploy script on my webserver whenever I push new content from my local machine.  
                                                This script then goes and grabs the current site content.  Pretty basic setup that we use currently on most projects within my current company.
                                                This project also uses sass for the css.  The sass code is compiled using codekit.
                                        </p>
                                </div><!-- sectionText -->
                        </div><!-- panelWrap -->
                        <div class="panelWrap" id="about">
                                <div class="row sectionHeading">
                                        <div class="col-md-3">
                                                <img src="./images/suncar.jpg" width="95%">
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
                        </div><!-- panelWrap -->
                        <div class="panelWrap" id="experience">
                                <div class="row sectionHeading">
                                        <div class="col-md-3">
                                                <img src="./images/suncar.jpg" width="95%">
                                        </div>
                                        <div class="col-md-9">
                                                <div class="sectionTitle">
                                                        Who have I helped?
                                                </div>
                                                <div class="sectionBar">
                                                </div>
                                        </div>
                                </div><!-- sectionHeading -->
                                <div class="row sectionText">
                                        <p><strong>Employment</strong></p> 
                                        <p>This will look different
                                        </p>
                                </div><!-- sectionText -->
                        </div><!-- panelWrap -->
                        <div class="panelWrap" id="dream">
                                <div class="row sectionHeading">
                                        <div class="col-md-3">
                                                <img src="./images/suncar.jpg" width="95%">
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
                                        <p><strong>Not sure!</strong> First and formost I love to learn.  You give me a challenge and I will take it on with gusto. </p> 
                                        <p>Build amazing fun software!
                                        </p>
                                </div><!-- sectionText -->
                        </div><!-- panelWrap -->
                </div><!-- mainBodyWrap -->
        </body>

        <script type="text/javascript">
                $('.tabItem').click(function() {
                        var theId = $(this).attr('id');
                        theId = theId.replace("li", "");

                        var oldTab = $('menuItemSelected');
                        oldTab.removeClass('menuItemSelected');

                        $(this).addClass("menuItemSelected");
                        var oldPanel = $('selected')
                        oldPanel.removeClass("selected")
                        
                        var newPanel = $('#' + theId);
                        newPanel.addClass("selected");
                });
        </script>

</html>