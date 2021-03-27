 <?php 
  $item_id=$_GET['item_id']?? 1;
  foreach($product->getData() as $item):
    if($item['item_id']== $item_id) :
 ?> 
  
  <!-- product-->
    <section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <!-- first column-->
          <div class="col-sm-6">
            <img src="<?php echo $item['item_image']?? "./assets/item10.jpg" ?>" style="height: 500px;" alt="product" class="img-fluid">
            <div class="row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Proceed to buy</button> 
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add to cart</button>
              </div>

            </div>
          </div>
          <!-- second column-->
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20">
              <?php echo $item['item_name']?? "Unkown" ?>
            </h5>
            <small>by&nbsp;<?php echo $item['item_brand']?? "Brand" ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20 ratings & reviews </a>

            </div>
            <hr class="m-0">

            <!--product price-->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P</td>
                <td><strike>Nrs. 4,00,000</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price</td>
                <td class="font-size-20 text-danger">&nbsp; Nrs.<span><?php echo $item['item_price']?? 0 ?></span><small class="text-dark font-size-12">&nbsp;Inc. VAT</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save</td>
                <td><span class="font-size-16 text-danger">Nrs 30,000</span</td>
              </tr>
            </table>
            <!--/product price-->

            <!--policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3<br> Delivery</a>
                </div>
                <!------------------>
                <div class="return text-center mx-2">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year<br> Warranty</a>
                </div>

              </div>
            </div>
            <!--/policy-->
            <hr>
            <!--#order-details order details-->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery by: Mar 29 - Apr 1</small>
              <small>Sold by <a href="#">Nepal Dental International</a>(4.5 out of 5 | 50 ratings )</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer-460019</small>
            </div>
            <!--/order details-->

            <!--quantities-->
            <div class="row">
              <div class="col-6">
                <!--color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-primary-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                    <div class="p-2 color-second-bg rounded-circle">
                      <button class="btn font-size-14"></button>
                    </div>
                  </div>
                </div>
                <!--/color-->
              </div>
              <div class="col-6">
                <!--quantity-->
                <div class="qty d-flex">
                  <h6 font-baloo>Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!--/quantities-->
              </div>
            </div>
            

            <!--other features-->
            <div class="size my-3">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 1</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 2</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">Feature 3</button>
                </div>
              </div>
            </div>
            <!--/other features-->
          </div>

          <!--Product description-->
          <div class="col-12 mt-5">
            <h6 class="font-rubik">Product Description</h6>
            <hr>
            <p class="font-rale font-size-14">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, asperiores molestiae exercitationem laborum aspernatur inventore dignissimos cupiditate ratione nemo. Sunt.
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi vel suscipit saepe ipsum qui non natus reprehenderit iste cum consequuntur.
            </p>
            <p class="font-rale font-size-14">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, asperiores molestiae exercitationem laborum aspernatur inventore dignissimos cupiditate ratione nemo. Sunt.
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi vel suscipit saepe ipsum qui non natus reprehenderit iste cum consequuntur.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /product-->

<?php 
  endif;
  endforeach;
?>