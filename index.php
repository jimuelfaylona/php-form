<?php
//echo '<p>This is PHP!</p>;

if (isset($_GET["FirstName"])){//show feedback
  //echo $_GET["FirstName"];
  
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
  
}else{//show form
  echo'
  <form action="">
  <p>First Name: <input type="text" name="FirstName" /></p>
  <p>Last Name: <input type="text" name="LastName" /></p>
  <p>Favorite Color:</p>
  <p><input type="radio" name="FavoriteColor[]" value="red"/> Red</p>
  <p><input type="radio" name="FavoriteColor[]" value="blue"/> Blue</p>
  <p><input type="radio" name="FavoriteColor[]" value="yellow"/> Yellow</p>
  <p>Sundae Toppings:</p>
  <p><input type="radio" name="Toppings[]" value="oreos"/> Oreos</p>
  <p><input type="radio" name="Toppings[]" value="m&m"/> M & M</p>
  <p><input type="radio" name="Toppings[]" value="gummy bear"/> Gummy Bears</p>
    <input type="submit" />
  </form
  ';
}

?>
<p>This is HTML</p>
