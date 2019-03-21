$(document).ready(function (){
  //  $("#warning").hide();

  $("#n").hide();
  $("#p").hide();
  $("#e").hide();
   // validate();
    register();
    $('#name, #email, #password').change(register());
    $('#name,#email, #password').keypress(register());
    
    $("#login_msg").hide();
    $("#login_but").click(function(){
        $("msg").show();
      });

    if(e.which == 8) {
        $("#register").prop("disable", true);
        $("#register").addClass("disable");
        $("#n").hide();
        $("#p").hide();
        $("#e").hide();
    }
});


 function register(){
    if ($('#name').val().length   >=   5 ){
        $("#n").show();
    }
    if ($('#address').val().length   >=   5 ){
        $("#add").show();
    }
    if($('#password').val().length    >= 8) {
        $("#p").show();
    }
    var email = $("#email").val();
    var email_valid=0;
        if(email != 0)
        {
            if(isValidEmailAddress(email))
            {
                 email_valid = 1;
                 $("#e").show();
            
            } else {
                email_valid = 0;
               
            }
        } else {
            email_valid = 0;     
        }

    if ($('#name').val().length   >=   5  &&
        email_valid === 1  &&
        $('#password').val().length    >= 8) 
    {
        //$("#register").prop("disable", false);
//$("#register").removeClass("disable");
    }
    else 
    {
       // $("#register").prop("disable", true);
       // $("#register").addClass("disable");      
    }
 }
 
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    //alert(pattern.test(emailAddress));
    return pattern.test(emailAddress);
}
