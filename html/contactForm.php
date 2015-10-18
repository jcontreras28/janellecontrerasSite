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
                                           // $("#contactform").validate();
                                    </script>
                            </div>
                            <div class="clear"></div>
                    </div>
                    <!-- END Contact Form --> 
            </div><!-- panelWrap -->