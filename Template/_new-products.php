<?php
  
  shuffle($product_shuffle);

  //request method post
  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!isset($_POST['new-products-submit'])){
      //call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
  }
?>   
   
   <!-- new-products section-->
    <section id="new-products">
      <div class="container">
        <h4 class="font-rubik font-size-20">New Products</h4>
        <hr>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-theme">
           <?php  foreach($product_shuffle as $item) {?>
            <div class="item py-1 px-2 bg-light">
              <div class="product font-rale">
                <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
                  <img src="<?php echo $item['item_image'] ?? "./assets/products/Skydent-Relieve-Premium.png"; ?>" alt="item1" class="img-fluid py-3">
                </a>
                <div class="text-center">
                  <!--Product title-->
                  <h6><?php echo $item['item_name'] ?? "Unknow"; ?></h6>
                  <!--Product rating-->
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <!--Product Price-->
                  <div class="price py-2">
                    <span><?php echo $item['item_price'] ?? "0"; ?></span>
                  </div>
                  <!--Product Button (add to cart)-->
                  <form method="post" >
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                  <input type="hidden" name="user_id" value="<?php echo 2; ?>">
                  <button type="submit" name="new-products-submit" class="btn btn-warning font-size-12">Add to Cart</button>
                  
                  </form>
 
                </div>
              </div>
            </div>
            <?php }//closing for each function ?>
        
        </div>
        <!-- Owl Carousel-->

      </div>
    </section>
    <!-- /new-products section-->