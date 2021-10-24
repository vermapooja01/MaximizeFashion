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
    <li class="nav-item">
        <a class="nav-link" href="neworder.php" >
          Cart
        </a>
    </li>
    </ul>
    
  </div>
</nav>
<br/>
<br/>

<div class="container" style="width:70%; height:5%;">
  <h2></h2>
  <br/>
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress1.jpg" alt="Card image cap" style="width:200px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Printed Maxi Dress" placeholder="Printed Maxi Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="20" placeholder="$20" readonly="readonly">
        </div>
        </div>
         
     <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Buy Now</button>
      </form>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress2.jpg" alt="Card image cap" style="width:200px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Red Midi Dress" placeholder="Printed Maxi Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="15" placeholder="$15" readonly="readonly">
        </div>
        </div>
    <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
    <div class="form-group col-md-6">
      <button class="btn btn-primary" type="submit">Buy Now</button>
    </div>
      
    
      </form>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress3.jpg" alt="Card image cap" style="width:175px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Floral Red Dress" placeholder="Floral Red Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="20" placeholder="$20" readonly="readonly">
        </div>
        </div>
      <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Buy Now</button>
      </form>
    </div>
</div>
  
</div>
<br/>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress4.jpg" alt="Card image cap" style="width:150px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Blue Mini Dress" placeholder="Blue Mini Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="25" placeholder="$25" readonly="readonly">
        </div>
        </div>
      <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Buy Now</button>
      </form>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress5.jpg" alt="Card image cap" style="width:175px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Black Dress" placeholder="Black Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="20" placeholder="$20" readonly="readonly">
        </div>
        </div>
      <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Buy Now</button>
      </form>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/dresses/dress6.jpg" alt="Card image cap" style="width:175px;height:auto;margin-left: auto; margin-right: auto; margin-top: 15px;"><hr>
    <div class="card-body">
      <form action="order.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-8">
          <input type="text" class="form-control" id="productname" name="productname" value="Floral Dress" placeholder="Floral Dress" readonly="readonly">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="productprice" name="productprice" value="10" placeholder="$10" readonly="readonly">
        </div>
        </div>
      <div class="form-row">
      <div class="col-md-5 mb-3">
        <label for="inputState">Size</label>
        <select id="size" class="form-control" name="size" required="required">
          <option selected>Size</option>
          <option>XS</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
        </select>
      </div>
      <div class="col-md-5 mb-3">
        <label for="inputState">Quantity</label>
      <select id="quantity" class="form-control" name="quantity" required="required">
        <option selected>Quantity</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
    </div>
      <button class="btn btn-primary" type="submit">Buy Now</button>
      </form>
    </div>
</div>
  
</div>
</div>


<h2> </h2>

<!--<img src="images/main1.jpg" class="img-fluid" alt="responsive image" style="width:1100px;height:600px;"> -->

</body>
</html>

