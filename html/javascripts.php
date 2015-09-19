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

                $('.fa-envelope').click(function() {

                        // updating menu
                        var oldTab = $('.menuItemSelected');
                        oldTab.removeClass('menuItemSelected');
                        $('#contactForm').addClass("menuItemSelected");

                        // updating page
                        var oldPanel = $('.selected')
                        oldPanel.removeClass("selected")
                        $('#contactForm').addClass("selected");
                });
                $('.fa-github').click(function() {

                        // updating menu
                        var oldTab = $('.menuItemSelected');
                        oldTab.removeClass('menuItemSelected');
                        $('#gitRepo').addClass("menuItemSelected");

                        // updating page
                        var oldPanel = $('.selected')
                        oldPanel.removeClass("selected")
                        $('#gitRepo').addClass("selected");
                });


                $('.windowwidth').click(function(){
                        alert("width= "+$(window).width());
                });

                $('.menuSandwhich').click(function() {
                        $('.mobileItems').slideToggle(350);
                });


        </script>