<div class="panelWrap" id="contactForm"><!-- Contact Form -->
    <div class="contactcontent">
        <div id="contact-form">
            <form action="javascript:void(0);" id="contactform" method="post" class="contactsubmit">
                <div class="nameField">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" minlength="2" size="22" tabindex="1" class="required" required/>
                </div><!-- nameField -->
                <br>
                    
                <div class="emailField">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" size="22" tabindex="1" class="required email" required/>
                    </div><!-- emailField -->
                <div class="clearfix"></div>
                
                <div class="messageRow">
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="70%" rows="8" tabindex="3" class="required" required></textarea>
                </div><!-- messageRow -->
                <p class="subButton">
                    <label for="submit"></label>
                    <input type="submit" name="submit" id="submit" class="button" value="Send Message"/>
                </p><!-- subButton -->
                <input type="hidden" name="csubmitted" id="csubmitted" value="true" />
            </form>
            <script>
                // $("#contactform").validate();
            </script>
        </div><!-- id: contactForm -->
        <div class="thankyouPanel" style="display:none">
            <h2>Thank you for your message!</h2>
        </div>
        <div class="clear"></div>
    </div><!-- contactcontent -->
</div><!-- panelWrap -->