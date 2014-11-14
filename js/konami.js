$(document).ready(function(){
   if (window.matchMedia ("(min-width: 700px)").matches){ 
    jQuery(function(){
        var kKeys = [];
        function Kpress(e){
            kKeys.push(e.keyCode);
            if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65") >= 0) {
                jQuery(this).unbind('keydown', Kpress);
                kExec();
            }
        }
        jQuery(document).keydown(Kpress);
    });
    function kExec(){
       $("#konami").fadeIn();
    }

    $("#konami img").click(function(){
        $('#konami').fadeOut();
    });
   } 
});    
