<!doctype html>
<html lang="en">
  <head>
        <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="css/style.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="index.php">
                        <img src="images/aceart.png" alt="">
                      </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                      </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">Events</a>
                      </li>
                    
                  </ul>
                </div>
              </nav>
              <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                               
                    </div>
                  </div>
        <div class="container">
                <div class="row">
                        <div class="col-12" id="contact">
                            <h3 class="text-center align-middle">Contact Us</h3>

                                <form method="post" action="contacte.php" name="conForm" onsubmit="validateForm()">
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required pattern="[a-z, A-Z]+">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required pattern="[0-9]+">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required pattern="[a-z, A-Z]+">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                                <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Enter your Message....." required pattern="[a-z, A-Z]+"></textarea>
                                              </div>
                                        <input type="submit" class="btn float-right" name="submit">
                                      </form>
                        </div>
                      </div>
        </div>
                <footer class="mainfooter" role="contentinfo">
                    <div class="footer-middle">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <!--Column1-->
                          <div class="footer-pad">
                            <h4>Address</h4>
                            <address>
                                  <ul class="list-unstyled">
                                    <li>
                                      Leadway Estate<br>
                                      Gbagada Phase 2<br>
                                      Lagos,Nigeria.<br>
                                      
                                    </li>
                                  </ul>
                                </address>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <!--Column1-->
                            <div class="footer-pad">
                              <h4>Contact</h4>
                              
                                    <ul class="list-unstyled">
                                      <li>
                                        Phone-1: 09034567892<br>
                                        Phone-2: 08056789234<br>
                                       Email: maiyeniko@gmail.com<br>
                                      </li>
                                    </ul>
                                  
                            </div>
                          </div>
                        <div class="col-md-4">
                          <!--Column1-->
                          <div class="footer-pad">
                            <h4>Website Information</h4>
                            <ul class="list-unstyled">
                              <li><a href="signin.php">Sign In</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">FAQs</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="footer-bottom">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12 col-md-12 col-lg-12">
                            <!--Footer Bottom-->
                            <a href="facebook.com"><i class="fa fa-facebook-f"></i></a>
                            <a href="twitter.com"> <i class="fa fa-twitter"></i></a>
                            <a href="linkedin.com"><i class="fa fa-linkedin"></i></a>
                            <a href="google.com"><i class="fa fa-google"></i></a>
                            <p>Connect with us on our various platforms</p>
                            <p class="text-center">&copy; Copyright 2016 - City of USA.  All rights reserved.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>
  </body>
</html>