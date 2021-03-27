 <?php 
      //require mySql Connection
      require('database/DBController.php');

      //require Product class
      require('database/Product.php');

      //require Cart class
      require('database/Cart.php');

     //require DBControler object;
      $db=new DBController();

      //Product object
      $product = new Product($db);

     //print_r($product->getData());
     $product->getData();

     //Cart Object
     $Cart=new Cart($db);




      ?>



