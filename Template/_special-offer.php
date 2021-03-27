<?php
  $brand =array_map(function($pro){ return $pro['item_brand'];}, $product_shuffle);
  $unique = array_unique($brand);
  sort($unique);
  shuffle($product_shuffle);
  //print_r($unique);

 //request method post
  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!isset($_POST['special-offer-submit'])){
      //call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
    
  }

?>

 <!-- #special-offer Special Offers, Special Price, All products-->
    <!--TODO:--> 
    <section id="special-offer">
      <!-- TODO: need to align the container-->
      <div class="container">
        <h4 class="font-rubik font-size-20">Special Offer</h4>
        <div id="filters" class="button-group text-end font-baloo font-size-16">
          <button class="btn is-checked" data-filter="">All Brands</button>
          <?php 
            array_map(function($brand){ 
              printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
            },$unique);
            ?>
        </div>

        <!--Product Filter Grid by Brands-->
        <div class="grid">
          <?php array_map(function($item){ ?>
          <!-- Brand1 item-->
          <div class="grid-item border <?php echo $item['item_brand']?? "Brand"; ?>">
            <div class="item py-2" style="width: 200px;">
              <!--Product Template-->
              <div class="product font-rale">
                <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
                  <img src="<?php echo $item['item_image']?? "./assets/item1.png"; ?>" alt="item1" class="img-fluid py-3">
                </a>
                <div class="text-center">
                  <!--Product title-->
                  <h6><?php echo $item['item_name']?? "unknown"; ?></h6>
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
                    <span>Rs. <?php echo $item['item_price']?? "0"; ?> </span>
                  </div>
                   <!--Product Button (add to cart)-->
                  <form method="post" >
                  <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                  <input type="hidden" name="user_id" value="<?php echo 2; ?>">
                  <button type="submit" name="special-offer-submit" class="btn btn-warning font-size-12">Add to Cart</button>
                  
                  </form>
              
                </div>
              </div>
            </div>
            </div>
          <?php },$product_shuffle) ?>
          
          
          
        </div>
      </div>
    </section>
    <!-- /#special-offer Special Offers, Special Price, All products-->