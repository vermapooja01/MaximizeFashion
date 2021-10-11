<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/validation.js"></script>
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clothing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dresses.html">Dresses</a>
          <a class="dropdown-item" href="shirts.html">Shirts/Tops</a>
          <a class="dropdown-item" href="bottoms.html">Bottoms</a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shoes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Heels</a>
          <a class="dropdown-item" href="#">Flats</a>
          <a class="dropdown-item" href="#">Sneakers</a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accessories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Jewelry</a>
          <a class="dropdown-item" href="#">Bags</a>
          <a class="dropdown-item" href="#">Hats</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="aboutus.html" >
          About Us
        </a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="contactform.html" >
          Contact Us
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="signup.html" >
          Sign Up
        </a>
    </li>
    </ul>
    
  </div>
</nav>
<br/>
<br/>

 <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => maximizefashion
    $conn = mysqli_connect("localhost", "root", "", "maximizefashion");
    
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    $productname = $_REQUEST['productname'];
    $productprice = $_REQUEST['productprice'];
    $size = $_REQUEST['size'];
    $quantity = $_REQUEST['quantity'];
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO orders (productname, productprice, size, quantity) VALUES ('$productname',
      '$productprice','$size', '$quantity')";
    
    if(mysqli_query($conn, $sql)){
      echo "<table class='table'>
  <thead>
    <tr>
      <th scope='col'>Product Name</th>
      <th scope='col'>Product Price</th>
      <th scope='col'>Size</th>
      <th scope='col'>Quantity</th>
      <th scope='col'>Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>"."$productname"."</td>
      <td>"."$productprice"."</td>
      <td>"."$size"."</td>
      <td>"."$quantity"."</td>
      <td><button type='button' class='btn btn-danger'>Remove</button></td>
    </tr>
  </tbody>
</table>";
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
    ?>
