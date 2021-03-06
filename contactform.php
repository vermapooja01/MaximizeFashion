<?php
include 'db_connection.php';

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #f08080;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>-->
</head>
<body style="background-image: url('images/background6.jpg');">

<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">MaximizeFashion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clothing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dresses.php">Dresses</a>
          <a class="dropdown-item" href="shirts.html">Shirts/Tops</a>
          <a class="dropdown-item" href="bottoms.html">Bottoms</a>
        </div>
        
       <li class="nav-item">
        <a class="nav-link" href="aboutus.php" >
          About Us
        </a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="contactform.php" >
          Contact Us
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="signup.php" >
          Sign Up
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="neworder.php" >
          Cart
        </a>
    </li>
    </ul>
    
  </div>
</nav>
<br/>
<div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Contacts Us
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>Please allow us to serve you better by sending us your feedbacks and suggestions on <i><b>maximizefashion2021@gmail.com </b></i>. We would love to hear from you.</p>

        <p>If you have any questions about our products, shipping and handling and sizing, feel free to give us a call on <i><b>222-222-2222</b></i> and our staff will assist you in the best way possible.
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Send Us Message
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="container">
        <form action="insert.php" method="post" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="First name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" name="lastname" placeholder="Last name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  <div class="form-row">
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Email</label>
      <input type="text" class="form-control" id="validationCustom05" name="email" placeholder="Email" required>
      <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
  </div>
  <div class="form-row">
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Message</label>
      <textarea class="form-control" id="validationCustom05" name="message" placeholder="Your Message Here" required></textarea>
      <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          FAQs
        </button>
      </h5>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p><i>This area will include Frequently Asked Questions</i></p>

      </div>
    </div>
  </div>
  
</div>
</div>




<!--<img src="images/main1.jpg" class="img-fluid" alt="responsive image" style="width:1100px;height:600px;"> -->
<!--<div id="templatemo_footer" style="clear: both;
  width: 100%;
  padding: 20px 0px 20px 0;
  text-align: center;
  border-top: 1px solid #25211e;
  margin-top:100px;
  color: #999;
  position: fixed;
  bottom: 0;
  background-color: #111110;">
    
         <a style="color: #fff;font-weight: normal;" href="index.html">Home</a> | <a style="color: #fff;font-weight: normal;" href="search.html">Search</a> | <a style="color: #fff;font-weight: normal;" href="products.html">Products</a> | <a style="color: #fff;font-weight: normal;" href="newproducts.html">New Products</a> | <a style="color: #fff;font-weight: normal;" href="#">FAQs</a> | <a style="color: #fff;font-weight: normal;" href="contactus.html">Contact Us</a><br />
        Copyright &#169; 2021 <a style="color: #fff;font-weight: normal;" href="index.html"><strong>Maximize Fashion</strong></a> </div> -->
    <!-- end of footer -->
</body>
</html>

