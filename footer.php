<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#login").on("click", function(){
      //email
      var email = $("#email").val();
      if(email=="") {
        alert("Email ID Mandatory");

        return false;
      }
      else {
        if( !validateEmail(email)) {
          alert("invalid email");

          return false;
        }
      }
      //password validation
      var password = $("#password").val();
      if(password=="") {
        alert("password is Mandatory");

        return false;
      }
    });

    $("#signup").on("click", function(){
      
      //first name
      var firstName = $("#firstname").val();

      if(firstName=="") {
        alert("First Name Mandatory");

        return false;
      }
      //last name
      var lastName = $("#lastname").val();

      if(lastName=="") {
        alert("Last Name Mandatory");

        return false;
      }
      //email

      var email = $("#email").val();

      if(email=="") {
        alert("Email ID Mandatory");

        return false;
      }
      else {
        if( !validateEmail(email)) {
          alert("invalid email");

          return false;
        }
      }
      //password validation
      var password = $("#password").val();
      var confirmPassword = $("#confirmpassword").val();
      if(password=="") {
        alert("password is Mandatory");

        return false;
      }
      if(confirmPassword=="") {
        alert("Confirm password is Mandatory");

        return false;
      }
      if(password != confirmPassword) {
        alert("confirm password must be same as password");

        return false;
      }
      var dob = $("#dob").val();
      if(dob=="") {
        alert("Dob Mandatory");

        return false;
      }

    });
    
});

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( email );
  }

</script>
</body>
</html>