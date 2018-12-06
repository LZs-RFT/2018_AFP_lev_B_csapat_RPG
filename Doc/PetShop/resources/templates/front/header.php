<?php
require_once("../resources/config.php");
?>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Pet Shop</a></h1>
      <h2>The Best place to choose your pet</h2>
    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
    <nav>
      <ul>
        <li><a href="http://localhost/Doc/PetShop/search/index.php">Keresés</a></li>
        <li><a href="http://localhost/Doc/PetShop/reg/login.php">Login</a></li>
        <li><a href="http://localhost/Doc/PetShop/reg/register.php">Registration</a></li>
        <li><a href="http://localhost/Doc/PetShop/admin/index.php">Admin</a></li>
        <li class="last"><a href="#">Text Link</a></li>
      </ul>
    </nav>
  </header>
</div>


