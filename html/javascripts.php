<script type="text/javascript">

        function sizeBackground() {
                var theHeight = $('.selected').height() + 100;
                var winHeight = $(window).height();

                if (winHeight > theHeight) {
                        $('.bottomBackground').height(winHeight+"px");
                }else {
                        $('.bottomBackground').height(theHeight+"px");
                }
        }

        var jPageType = "<?php Print($pageType); ?>";

        if(jPageType.length > 1) {

                // updating menu
                var oldTab = $('.menuItemSelected');
                oldTab.removeClass('menuItemSelected');
                $('#li'+jPageType).addClass("menuItemSelected");

                // updating page
                var oldPanel = $('.selected')
                oldPanel.removeClass("selected")
                        
                var newPanel = $('#' + jPageType);
                newPanel.addClass("selected");

                sizeBackground();
        }


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

                sizeBackground();
        });

        $('.fa-envelope').click(function() {

                // updating menu
                var oldTab = $('.menuItemSelected');
                oldTab.removeClass('menuItemSelected');
                $('#contactForm').addClass("menuItemSelected");

                // updating page
                var oldPanel = $('.selected')
                oldPanel.removeClass("selected")
                $('#contactForm').addClass("selected");

                $('#contactform').show();
                $('.thankyouPanel').hide();

                sizeBackground();
        });

        $('.myName').click(function() {

                // updating menu
                var oldTab = $('.menuItemSelected');
                oldTab.removeClass('menuItemSelected');

                $('#liskills').addClass("menuItemSelected");

                // updating page
                var oldPanel = $('.selected')
                oldPanel.removeClass("selected")
                        
                var newPanel = $('#skills');
                newPanel.addClass("selected");

                sizeBackground();
        })

        $('.fa-github').click(function() {

                // updating menu
                var oldTab = $('.menuItemSelected');
                oldTab.removeClass('menuItemSelected');
                $('#gitRepo').addClass("menuItemSelected");

                // updating page
                var oldPanel = $('.selected')
                oldPanel.removeClass("selected")
                $('#gitRepo').addClass("selected");

                sizeBackground();
        });


        $('.windowwidth').click(function(){
                alert("width= "+$(window).width());
        });

        $('.menuSandwhich').click(function() {
                $('.mobileItems').slideToggle(350);
        });

        function validateForm() {
                var x = document.forms["contactform"]["name"].value;
                var y = document.forms["contactform"]["email"].value;
                var z = document.forms["contactform"]["message"].value;
                if (x == null || x == "") {
                        alert("Must include name.");
                        return false;
                }
                else if (y == null || y == "") {
                        alert("Must include your email.");
                        return false;
                }
                else if (z == null || z == "") {
                        alert("Must include message.");
                        return false;
                }
                else 
                        return true
        }

        $('#submit').click(function() {
                if (validateForm()){
                        $.ajax({
                                url: '/sendMess.php',
                                type: 'POST',
                                dataType: "json",
                                data: {
                                    name: $('#name').val(),
                                    email: $('#email').val(),
                                    message: $('#message').val()
                                }
                            }).done(function(data){
                                    alert(JSON.stringify(data));
                        });
                        $('#contactform').hide();
                        $('.thankyouPanel').show();
                }
        });


</script>

