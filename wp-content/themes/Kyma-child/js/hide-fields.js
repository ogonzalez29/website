/*! jQuery script to hide certain form fields */
 
jQuery(document).ready(function($) {
 
        //Hide the fields initially
        $("#otherServices").hide();
        $("#photoServices").hide();
 
        //Show the text field only when the last option is chosen for other services
        $('#senderService').change(function() {
                if ($("#senderService").val() == "Otro(s)") {
                        $("#otherServices").show();
                }
                else {
                        $("#otherServices").hide();
                }

                if ($("#senderService").val() == "Reparación de abolladuras" || $("#senderService").val() == "Latonería y pintura general" ) {
                        $("#photoServices").show();
                }
                else {
                        
                        $("#photoServices").hide();  
                }
        });

});