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
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="index.php" >
            <img src="images/aceart.PNG"  alt="">
          </a>
      
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" id="checkout-link" href="checkout.php">Checkout</a>
            </li>
           
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
            
        <div class="row">
            
            <div class="col-md-6">
                    <h2>Billing Address</h2>
                <form method="POST"  action="users.php">
                    <div class="form-group">
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required pattern="[a-z, A-Z]+">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required pattern="[a-z, A-Z]+">
                    </div>
                    <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                     <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"required pattern="[0-9]+" minlength="11" maxlength="11"> 
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="artoption" name="artoption" placeholder="Art option">
              </div>
              <div class="form-group">
                      <input type="hidden" class="form-control" id="artprice" name="artprice" placeholder="Art Price">
              </div>
                          <div class="form-group">
                                <input type="text" class="form-control" id="street" name="street" placeholder="Street Address" required>
                         </div>
                         <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" required pattern="[a-z, A-Z]+">
                         </div>
                         <div class="form-group">
                                <input type="text" class="form-control" id="state" name="state" placeholder="State" required pattern="[a-z, A-Z]+">
                         </div>
                         <input class="btn float-right" type="submit"  name="submit" value="Place Order">
                  </form>
            </div>
            <div class="col-md-6" id="artbasket">
<h4 class="text-center">Your Order</h4>
<p > Below is the art piece you have selected and the price of the piece:</p>
<p >Kindly fill the form on the left to place order</p>
            </div>
          </div>
      </div>
<script src="jquery-3.3.1.js"></script>
<script src="js/art.js"></script>
<script>
        $('#artoption').val(item);
        $('#artprice').val(price);
        $('#artbasket').append(`<p>	${$('#artoption').val()} : ${$('#artprice').val()}</p>`)

        window.history.pushState('','','http://localhost/aceart/checkout.php');

</script>
 

</body>
</html>