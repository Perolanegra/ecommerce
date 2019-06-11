@extends('index.classic')

@section('content')


        <!-- Cart Section -->
        <div class="bg-light">
          <div class="container space-2">
            <!-- Title -->
            <div class="mb-6">
              <h1 class="h2 font-weight-normal mb-1">Your cart</h1>
              <p>Items are reserved for 60 minutes.</p>
            </div>
            <!-- End Title -->
    
            <form>
              <!-- Table Content -->
              <div class="table-responsive-sm mb-6">
                <table class="table table-borderless bg-white mb-0">
                  <thead>
                    <tr>
                      <th>Items</th>
                      <th>Quantity</th>
                      <th>Unit price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Item Content -->
                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <div class="u-avatar mr-3">
                            <img class="img-fluid rounded" src="../../assets/img/100x100/img14.jpg" alt="Image Description">
                          </div>
                          <div class="media-body">
                            <h2 class="h6 mb-0">Hoodie</h2>
                            <small class="d-block text-secondary">Small</small>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="js-quantity input-group u-quantity">
                          <input class="js-result form-control u-quantity__input" type="text" value="1">
                          <div class="u-quantity__arrows">
                            <span class="js-plus u-quantity__arrows-inner fas fa-angle-up"></span>
                            <span class="js-minus u-quantity__arrows-inner fas fa-angle-down"></span>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">$29</td>
                      <td class="align-middle text-center">
                        <button type="button" class="close float-none">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </td>
                    </tr>
                    <!-- End Item Content -->
    
                    <!-- Item Content -->
                    <tr>
                      <td>
                        <div class="media align-items-center">
                          <div class="u-avatar mr-3">
                            <img class="img-fluid rounded" src="../../assets/img/100x100/img13.jpg" alt="Image Description">
                          </div>
                          <div class="media-body">
                            <h2 class="h6 mb-0">Snapback cap</h2>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="js-quantity input-group u-quantity">
                          <input class="js-result form-control u-quantity__input" type="text" value="1">
                          <div class="u-quantity__arrows">
                            <span class="js-plus u-quantity__arrows-inner fas fa-angle-up"></span>
                            <span class="js-minus u-quantity__arrows-inner fas fa-angle-down"></span>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">$9</td>
                      <td class="align-middle text-center">
                        <button type="button" class="close float-none">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </td>
                    </tr>
                    <!-- End Item Content -->
                  </tbody>
                </table>
              </div>
              <!-- End Table Content -->
    
              <div class="row justify-content-lg-between">
                <!-- Delivery -->
                <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
                  <div class="card border-0 mb-1">
                    <div class="card-body p-3">
                      <div class="custom-control custom-radio d-flex align-items-center small text-muted">
                        <input type="radio" class="custom-control-input" id="deliveryRadio1" name="deliveryRadio" checked>
                        <label class="custom-control-label ml-1" for="deliveryRadio1">
                          <span class="d-block h6 text-dark font-weight-normal mb-1"><span class="font-weight-semi-bold">$4.58</span> - Standard delivery</span>
                          <span class="d-block">Shipment may take 5-6 business days.</span>
                        </label>
                      </div>
                    </div>
                  </div>
    
                  <div class="card border-0">
                    <div class="card-body p-3">
                      <div class="custom-control custom-radio d-flex align-items-center small text-muted">
                        <input type="radio" class="custom-control-input" id="deliveryRadio2" name="deliveryRadio">
                        <label class="custom-control-label ml-1" for="deliveryRadio2">
                          <span class="d-block h6 text-dark font-weight-normal mb-1"><span class="font-weight-semi-bold">$7.99</span> - Express delivery</span>
                          <span class="d-block">Shipment may take 2-3 business days.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Delivery -->
    
                <!-- Total -->
                <div class="col-md-6 col-lg-5 align-self-end">
                  <div class="media">
                    <div class="mr-4">
                      <h3 class="h5 mb-0">Total: $42.58</h3>
                      <p class="small mb-0">Got a discount code? Add it in the next step.</p>
                    </div>
                    <div class="media-body">
                      <a class="btn btn-primary transition-3d-hover" href="checkout.html">Checkout</a>
                    </div>
                  </div>
                </div>
                <!-- End Total -->
              </div>
            </form>
          </div>
        </div>
        <!-- End Cart Section -->
    
@endsection