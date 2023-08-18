
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    
    <form method="post" action="controller/findProducts.php">
      <h1>SEARCH FOR PRODUCTS</h1>
      <input type="text" name="productsname" />
      <input type="submit" name="findProducts" value="Search"/>
    </form>


 
  </body>
</html>