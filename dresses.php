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
<style>
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
</style>
</head>
<body style="background-image: url('images/background6.jpg');">

<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">MaximizeFashion</a>
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
    </ul>
    
  </div>
</nav>
<br/>
<br/>

<div class="container" style="width:70%; height:10%;">
  <h2></h2>
  <br/>
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress1.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-group col-md-8">
      <input type="text" class="form-control" id="productname" name="productname" value="Printed Maxi Dress" placeholder="Printed Maxi Dress" readonly="readonly">
    </div>
     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="productprice" name="productprice" value="$20" placeholder="$20" readonly="readonly">
    </div>
      <div class="form-group col-md-6">
      <label for="inputState">Size</label>
      <select id="size" class="form-control" name="size" required="required">
        <option selected>Size</option>
        <option>XS</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary" type="submit">Buy Now</button>
    </div>
      </form>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress2.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <h5 class="card-title">White Midi Dress</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress3.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <h5 class="card-title">Printed Maxi Dress</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Buy Now</button>
    </div>
</div>
  
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress4.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <h5 class="card-title">Printed Maxi Dress</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress5.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <h5 class="card-title">White Midi Dress</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress6.jpg" alt="Card image cap"><hr>
    <div class="card-body">
      <h5 class="card-title">Printed Maxi Dress</h5>
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Buy Now</button>
    </div>
</div>
  
</div>
</div>


<h2> </h2>

<!--<img src="images/main1.jpg" class="img-fluid" alt="responsive image" style="width:1100px;height:600px;"> -->
<footer>
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
    
	       <a style="color: #fff;font-weight: normal;" href="index.html">Home</a> | <a style="color: #fff;font-weight: normal;" href="search.html">Search</a> | <a style="color: #fff;font-weight: normal;" href="products.html">Products</a> | <a style="color: #fff;font-weight: normal;" href="newproducts.html">New Products</a> | <a style="color: #fff;font-weight: normal;" href="#">FAQs</a> | <a style="color: #fff;font-weight: normal;" href="contactform.html">Contact Us</a><br />
        Copyright &#169; 2021 <a style="color: #fff;font-weight: normal;" href="index.html"><strong>Maximize Fashion</strong></a> </div> -->
    <!-- end of footer -->
	</footer>
</body>
</html>
