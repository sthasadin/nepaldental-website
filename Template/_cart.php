  <!-- shopping cart section-->
    <section id="cart" class="py-3">
      <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--Shopping cart items-->
        <div class="row">
          <!-------cart items sections-->
          <div class="col-sm-9">
            <!--Cart item 1-->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src="./assets/item1.png" style="height: 120px;" alt="cart-item1" class="img-fluid">
              </div>

              <!--procuts rating and button on left side column-->
              <div class="col-sm-8">
                <h5 class="font-baloo font-size-20">Dental Chair</h5>
                <small>by Ndi</small>
                <!--product rating-->
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale font-size-14">(4.5 out of 5)</a>
                </div>
                <!--/product rating-->

                <!--product quantity-->
                <div class="qty d-flex pt-2">
                  <div class="d-flex font-rale w-25">
                    <button class="qty-up border bg-light" data-id="product1"><i class="fas fa-angle-up"></i></button>
                    <input type="text" data-id="product1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product1"><i class="fas fa-angle-down"></i></button>
                  </div>
                  <button type="submit" class="btn font-baloo text-danger px-2 mx-2 border">Delete</button>
                  <button type="submit" class="btn font-baloo text-danger px-2 border">Save for later</button>
                </div>

                <!--/product quantity-->

              </div>

              <!--procuts price right side column-->
              <div class="col-sm-2 text-end">
                <div class="font-size-20 text-danger font-baloo">
                  Nrs. <span class="product_price">500</span>
                </div>
              </div>
            </div>
            <!--/Cart item 1-->

            <!--Cart item 2-->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src="./assets/item2.jpeg" style="height: 120px;" alt="cart-item1" class="img-fluid">
              </div>
            
              <!--procuts rating and button on left side column-->
              <div class="col-sm-8">
                <h5 class="font-baloo font-size-20">Dental Chair</h5>
                <small>by Ndi</small>
                <!--product rating-->
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale font-size-14">(4.5 out of 5)</a>
                </div>
                <!--/product rating-->
            
                <!--product quantity-->
                <div class="qty d-flex pt-2">
                  <div class="d-flex font-rale w-25">
                    <button class="qty-up border bg-light " data-id="product2"><i class="fas fa-angle-up"></i></button>
                    <input type="text"  data-id="product2" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light" data-id="product2"><i class="fas fa-angle-down"></i></button>
                  </div>
                  <button type="submit" class="btn font-baloo text-danger px-2 mx-2 border">Delete</button>
                  <button type="submit" class="btn font-baloo text-danger px-2 border">Save for later</button>
                </div>
            
                <!--/product quantity-->
            
              </div>
            
              <!--procuts price right side column-->
              <div class="col-sm-2 text-end">
                <div class="font-size-20 text-danger font-baloo">
                  Nrs. <span class="product_price">500</span>
                </div>
              </div>
            </div>
            <!--/Cart item 2-->
          </div>
          <!----------/cart items sections-->
          <!-----------Subtotal section-->
          <div class="col-sm-3">
            <div class="sub-total border text-center mt-2">
              <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for free delivery</h6>
              <div class="border-top py-4">
                <h5 class="font-baloo font-size-20l">Subtotal (2 items):&nbsp; <span class="text-danger">Nrs&nbsp;</span><span class="text-danger" id="deal-price">1000</span> </h5>
                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
              </div>
            </div>

          </div>
          <!-----------/Subtotal section-->
        </div>
        <!--/Shopping cart items-->
      </div>
    </section>
