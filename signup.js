
$(document).ready(function (){
    //  $("#warning").hide();
    $("#n").hide();
    $("#p").hide();
    $("#e").hide();
    $("#a").hide();
    $("#pin").hide();
    $("#d").hide();
    $("#add").hide();
    $("login_msg").hide();
    $("#login_but").click(function(){
        $("msg").show();
      });
     // validate();
      register();
      address();
      $('#name, #email, #password').change(register);
      $('#name,#email, #password').keypress(register);
      
      if(e.which == 8) {
         // $("#register").prop("disable", true);
         // $("#register").addClass("disable");
          $("#n").hide();
          $("#p").hide();
          $("#e").hide();
          $("#a").hide();
          $("#pin").hide();
          $("#d").hide();
      }
  });
  
  
   function register(){
      if ($('#name').val().length   >=   5 ){
          $("#n").show();
      }
      if($('#address').val().length    >= 8) {
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
          $('#password').val().length    >= 8) {
        //  $("#register").prop("disable", false);
        //  $("#register").removeClass("disable");
      }
      else {
          
        //  $("#register").prop("disable", true);
        //  $("#register").addClass("disable");
          
      }
   }
   
  function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      //alert(pattern.test(emailAddress));
      return pattern.test(emailAddress);
  }


function address(){
  
  var stateObject = {
        "India": { 
            "Delhi": ["new Delhi", "North Delhi"],
            "Kerala": ["Thiruvananthapuram", "Palakkad"],
            "Karnatka": ["shimoga", "mysore","mandya"],
            "Goa": ["North Goa", "South Goa","East Goa","Soth Goa"],
        },
        "Australia": {
            "South Australia": ["Dunstan", "Mitchell"],
            "Victoria": ["Altona", "Euroa","Nithchie"]
        }, "Canada": {
            "Alberta": ["Acadia", "Bighorn","Bergia"],
            "Columbia": ["Washington", "Wigton","Sigeria"]
        },
    }
   
        var countySel = document.getElementById("countySel"),
        stateSel = document.getElementById("stateSel"),
        districtSel = document.getElementById("districtSel");
        for (var country in stateObject) {
        countySel.options[countySel.options.length] = new Option(country, country);
        }
        countySel.onchange = function () {
        stateSel.length = 1; 
        districtSel.length = 1; 
        if (this.selectedIndex < 1) return; 
        for (var state in stateObject[this.value]) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
        }
        }
        countySel.onchange(); 
        stateSel.onchange = function () {
        districtSel.length = 1; 
        if (this.selectedIndex < 1) return; 
        var district = stateObject[countySel.value][this.value];
        for (var i = 0; i < district.length; i++) {
        districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
        }
        }
    
}