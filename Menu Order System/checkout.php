<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
   <!-- <script type="text/javascript">
	function validateForm() {
    var firstname = document.regForm.fname;
	if (firstname.value == "") {
	alert("Please input your firstname");
	name.focus();
    return false;
    }
    if (!isNaN(firstname.value)) {
	alert("Please input only alphabet");
	name.focus();
    return false;
    }
    var lastname = document.regForm.lname;
	if (lastname.value == "") {
	alert("Please input your lasttname");
	name.focus();
    return false;
    }
    if (!isNaN(lastname.value)) {
	alert("Please input only text");
	name.focus();
    return false;
    }
	var email = document.regForm.email;
	if (email.value == "") {
	alert("Please input your email address");
	email.focus();
	return false;
	}
	if (email.value.indexOf("/") > -1)
        {
        alert("/ cannot be in field");
        email.focus() ;          
            return false;
     } 
     if (email.value.indexOf(".") < 0)
        {
           alert(". is missing in field");
           email.focus();
    return false;
    }
    if (email.value.indexOf("@") < 0)
        {
            alert("@ is missing in field");
           email.focus();
            return false;
        }   
	var phone = document.regForm.phone;
	if (phone.value == "" || isNaN(phone.value)) {
	alert("Phone number should be numeric.");
	phone.focus();
	return false;
	}
	if (phone.value.length != 11) {
	alert( "Phone number should be exactly 11 digits.");
	phone.focus();
	return false;
	}
	var street = document.regForm.street;
	if ( street.value == "") {
	alert("Please select your gender");
	return false;
    }
    var city = document.regForm.city;
	if (city.value == "") {
	alert("Please input your country");
	city.focus();
    return false;
    }
  var state = document.regForm.state;
	if (state.value == "") {
	alert("Please input your country");
state.focus();
    return false;
    }
	return true;
	}
	</script>-->
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php" >
            <img src="image/logoo.PNG"  alt="">
          </a>
      
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" id="checkout-link" href="index.html">Checkout</a>
            </li>
           
          </ul>
        </div>
      </nav>
      <div class="container">
            
        <div class="row">
            
            <div class="col-md-6">
                    <h2>Billing Address</h2>
                <form method="POST"  action="users.php">
                    <div class="form-group">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required pattern="[a-z]+">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required pattern="[a-z]+">
                    </div>
                    <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                     <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"required pattern="[0-9]+" minlength="11" maxlength="10"> 
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="foodoption" name="foodoption" placeholder="Food option">
              </div>
              <div class="form-group">
                      <input type="hidden" class="form-control" id="foodprice" name="foodprice" placeholder="Food Price">
              </div>
                          <div class="form-group">
                                <input type="text" class="form-control" id="street" name="street" placeholder="Street Address" required  pattern="[a-z]+">
                         </div>
                         <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required pattern="[a-z]+">
                         </div>
                         <div class="form-group">
                                <input type="text" class="form-control" id="state" name="state" placeholder="State" required pattern="[a-z]+">
                         </div>
                         <input class="btn" type="submit"  name="submit" value="submit">
                  </form>
            </div>
            <div class="col-md-6" id="foodbasket">
<h4>Your Food Basket</h4>
            </div>
          </div>
      </div>
<script src="jquery-3.3.1.js"></script>
<script src="js/menu.js"></script>
<script>
        $('#foodoption').val(item);
        $('#foodprice').val(price);
        $('#foodbasket').val(item);

        window.history.pushState('','','http://localhost/menu%20order%20system/checkout.php');

</script>
 

</body>
</html>