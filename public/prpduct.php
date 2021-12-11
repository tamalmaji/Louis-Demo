<div class="page-banner-section section breadcrumbs overlay-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="page-banner text-center">
          <h1 class="breadcrumbs-title">Products</h1>

          <ul class="breadcrumb-list page-breadcrumb">

            <li>
              <a href="/" title="Back to the home page">Home</a>
            </li>
            <li>




              <span>Products</span>



            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
</div>

<main>
  <div id="shopify-section-collection-template" class="shopify-section">
    <div class="product-section section pt-90 pb-90 pt-lg-80 pb-lg-80 pt-md-70 pb-md-70 pt-sm-60 pb-sm-60 pt-xs-50 pb-xs-50">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9 col-12">
            <div class="row">
              <div class="col">
                <div class="shop-toolbar">




                  <div class="product-view-mode">
                    <button class="grid active" data-mode="grid"><span>Grid</span></button>
                    <button class="list" data-mode="list"><span>List</span></button>
                  </div>



                  <!--     <div class="product-view-mode">
      <button class="grid active" data-mode="grid"><i class="fa fa-th-large"></i></button>
      <button class="list" data-mode="list"><span><i class="fa fa-th-list"></i></span></button>
    </div> -->

                  <div class="product-showing mr-auto">
                    <p>Showing
                      1 - 15
                      of
                      34
                      result
                    </p>
                  </div>
                  <div class="product-short">
                    <p for="SortBy">Sort by</p>
                    <select name="SortBy" id="SortBy">
                      <option value="manual">Featured</option>
                      <option value="best-selling">Best Selling</option>
                      <option value="title-ascending">Alphabetically, A-Z</option>
                      <option value="title-descending">Alphabetically, Z-A</option>
                      <option value="price-ascending">Price, low to high</option>
                      <option value="price-descending">Price, high to low</option>
                      <option value="created-descending">Date, new to old</option>
                      <option value="created-ascending">Date, old to new</option>
                    </select>
                  </div>
                </div>
              </div>














              <script>
                Shopify.queryParams = {};
                if (location.search.length) {
                  for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                    aKeyValue = aCouples[i].split('=');
                    if (aKeyValue.length > 1) {
                      Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                    }
                  }
                }

                $(function() {
                  $('#SortBy')
                    .val('title-ascending')
                    .bind('change', function() {
                      Shopify.queryParams.sort_by = jQuery(this).val();
                      location.search = jQuery.param(Shopify.queryParams);
                    });
                });
              </script>
            </div>
            <div class="shop-product-wrap grid row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630525833298">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/1-new-and-sale-badge-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_01_large.png?v=1564655327" alt="1. New and sale badge product">
                    </a>


                    <div class="sale-product">


                    </div>

















                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630525833298, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="1-new-and-sale-badge-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('1-new-and-sale-badge-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/1-new-and-sale-badge-product">1. New and sale badge product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972777967698"></span>
                        </span>

                        <span class="price"><span class=money>$110.00</span>

                          <span class="old"><span class=money>$130.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630525833298, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="1-new-and-sale-badge-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('1-new-and-sale-badge-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630535696466">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_02_2eb1e43e-f63b-441a-b579-a2be3a8fbeb5_large.png?v=1564655348" alt="10. This is the large title for testing large title and there is an image for testing">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630535696466, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing">10. This is the large title for testing large title and there is an image for testing</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779278418"></span>
                        </span>

                        <span class="price"><span class=money>$19.00</span>

                          <span class="old"><span class=money>$21.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...
                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630535696466, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630535925842">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/11-product-with-video">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_03_0dac5001-2024-488f-aefa-9b7565682a23_large.png?v=1564655368" alt="11. Product with video">
                    </a>





                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630535925842, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="11-product-with-video">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('11-product-with-video')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/11-product-with-video">11. Product with video</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779376722"></span>
                        </span>

                        <span class="price"><span class=money>$39.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for...
                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630535925842, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="11-product-with-video">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('11-product-with-video')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630525276242">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/12-unique-content-for-each-product-on-the-product-tab">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_04_801f7a9b-3117-49b9-884e-6b7fc382523f_large.png?v=1564655389" alt="12. Unique content for each product on the product tab">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630525276242, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="12-unique-content-for-each-product-on-the-product-tab">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('12-unique-content-for-each-product-on-the-product-tab')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/12-unique-content-for-each-product-on-the-product-tab">12. Unique content for each product on the product tab</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972777902162"></span>
                        </span>

                        <span class="price"><span class=money>$99.00</span>

                          <span class="old"><span class=money>$111.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        </p>
                        <meta charset="utf-8">
                        <p><span>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </span></p>
                        <p>
                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630525276242, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="12-unique-content-for-each-product-on-the-product-tab">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('12-unique-content-for-each-product-on-the-product-tab')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630526685266">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/2-new-badge-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_05_778fd959-fe3d-4dea-9012-af78bf0501d9_large.png?v=1564655408" alt="2. New badge product">
                    </a>


















                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630526685266, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="2-new-badge-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('2-new-badge-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/2-new-badge-product">2. New badge product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972778131538"></span>
                        </span>

                        <span class="price"><span class=money>$80.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630526685266, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="2-new-badge-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('2-new-badge-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630530519122">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/3-variable-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_06_6d41a4ee-f283-4d47-9df0-be8a311c0b5b_large.png?v=1564655444" alt="3. Variable product">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630530519122, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="3-variable-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('3-variable-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/3-variable-product">3. Variable product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972778328146"></span>
                        </span>

                        <span class="price"><span class=money>$70.00</span>

                          <span class="old"><span class=money>$85.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630530519122, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="3-variable-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('3-variable-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630534615122">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/4-soldout-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_07_2310bcc7-5f84-4efc-98c1-3dac1112c545_large.png?v=1564655577" alt="4. Soldout product">
                    </a>
                    <span class="soldout-title"></span>
                    <!-- Product Action -->
                    <div class="product-action">
                      <button class="cart cart-disable">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </button>


                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="4-soldout-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('4-soldout-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/4-soldout-product">4. Soldout product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972778852434"></span>
                        </span>

                        <span class="price"><span class=money>$19.00</span>

                          <span class="old"><span class=money>$29.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">
                        <button class="cart cart-disable">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </button>


                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="4-soldout-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('4-soldout-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630534680658">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/5-simple-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_08_91301b65-8b63-4ce4-8e01-0e99ce6fca18_large.png?v=1564655599" alt="5. Simple product">
                    </a>





                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630534680658, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="5-simple-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('5-simple-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/5-simple-product">5. Simple product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972778917970"></span>
                        </span>

                        <span class="price"><span class=money>$50.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630534680658, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="5-simple-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('5-simple-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630534778962">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/6-variable-with-soldout-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_09_037ce48d-2ada-4b6e-a096-3a843d459566_large.png?v=1564655626" alt="6. Variable with soldout product">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630534778962, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="6-variable-with-soldout-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('6-variable-with-soldout-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/6-variable-with-soldout-product">6. Variable with soldout product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972778950738"></span>
                        </span>

                        <span class="price"><span class=money>$55.00</span>

                          <span class="old"><span class=money>$75.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630534778962, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="6-variable-with-soldout-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('6-variable-with-soldout-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630535172178">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/7-sample-affiliate-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_10_b766ceee-fc01-4fa5-99d7-64b82b72a924_large.png?v=1564655641" alt="7. Sample affiliate product">
                    </a>





                    <!-- Product Action -->
                    <div class="product-action"></div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/7-sample-affiliate-product">7. Sample affiliate product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779081810"></span>
                        </span>

                        <span class="price"><span class=money>$29.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630535237714">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/8-countdown-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_11_61aaf5c6-d357-4bd2-a9c3-0d615fd708c7_large.png?v=1564655664" alt="8. Countdown product">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630535237714, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="8-countdown-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('8-countdown-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>





                    <div data-countdown="2020/05/24"></div>

                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/8-countdown-product">8. Countdown product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779114578"></span>
                        </span>

                        <span class="price"><span class=money>$39.00</span>

                          <span class="old"><span class=money>$60.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630535237714, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="8-countdown-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('8-countdown-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630535499858">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/9-without-shortcode-product">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_12_51a0a0d5-a7fe-4c9a-9fde-64a36d4b0c05_large.png?v=1564655683" alt="9. Without shortcode product">
                    </a>





                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630535499858, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="9-without-shortcode-product">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('9-without-shortcode-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/9-without-shortcode-product">9. Without shortcode product</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779212882"></span>
                        </span>

                        <span class="price"><span class=money>$79.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that...
                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630535499858, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="9-without-shortcode-product">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('9-without-shortcode-product')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630541267026">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/demo-product-title">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_13_f5e3f54c-fbce-4811-8e26-368bf326ccbd_large.png?v=1564655709" alt="Demo product title">
                    </a>


                    <div class="sale-product">


                    </div>




                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630541267026, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/demo-product-title">Demo product title</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972779802706"></span>
                        </span>

                        <span class="price"><span class=money>$19.00</span>

                          <span class="old"><span class=money>$21.00</span></span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...
                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630541267026, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630543429714">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/demo-product-title-1">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_14_599a7369-8415-49c5-a963-4d83ad56a1f7_large.png?v=1564655745" alt="Demo product title">
                    </a>


















                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630543429714, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title-1">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title-1')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/demo-product-title-1">Demo product title</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972780359762"></span>
                        </span>

                        <span class="price"><span class=money>$80.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630543429714, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title-1">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title-1')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                <!-- Product Item Start -->
                <div class="product-item product-item-2 29630556766290">
                  <!-- Image -->
                  <div class="product-image">
                    <!-- Image -->
                    <a class="image" href="/collections/all/products/demo-product-title-2">
                      <img class="popup_cart_image lazyload" src="//cdn.shopify.com/s/files/1/0252/3594/7602/products/product_15_a8561849-1bc2-4493-8e37-b284872612db_large.png?v=1564655764" alt="Demo product title">
                    </a>





                    <!-- Product Action -->
                    <div class="product-action">

                      <a href="javascript:void(0);" onclick="Shopify.addItem(29630556766290, 1); return false;" class="cart">
                        <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                      </a>



                      <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title-2">
                        <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                        <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                        <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                      </a>
                      <div>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title-2')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>



                  </div>
                  <!-- Content -->
                  <div class="product-content">
                    <div class="head">
                      <!-- Title-->
                      <div class="top">
                        <h4 class="title popup_cart_title"><a href="/collections/all/products/demo-product-title-2">Demo product title</a></h4>
                      </div>
                      <!-- Price & Ratting -->
                      <div class="bottom">
                        <span class="ratting">
                          <span class="shopify-product-reviews-badge" data-id="3972781670482"></span>
                        </span>

                        <span class="price"><span class=money>$50.00</span>

                        </span>


                      </div>
                    </div>
                    <div class="body">
                      <div class="product-description">
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>

                      </div>

                      <!-- Product Action -->
                      <div class="product-action">

                        <a href="javascript:void(0);" onclick="Shopify.addItem(29630556766290, 1); return false;" class="cart">
                          <span class="icon"><i class="bardy bardy-shopping-cart"></i><i class="hover-icon bardy bardy-shopping-cart"></i></span>
                        </a>



                        <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist wishlist-3" href="javascript: void(0)" button-wishlist data-product-handle="demo-product-title-2">
                          <span class="add-wishlist"><i class="bardy bardy-wishlist"></i></span>
                          <span class="loading-wishlist"><i class="fa fa-spinner animated rotateIn infinite"></i></span>
                          <span class="remove-wishlist"><i class="bardy bardy-wishlist-fill"></i></span>
                        </a>
                        <a class="quickview" title="Quick View" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('demo-product-title-2')"><span class="icon"><i class="bardy bardy-quick-view"></i><i class="hover-icon bardy bardy-quick-view"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-20">
              <div class="col">
                <div class="theme-default-pagination">
                  <nav class="pagination">
                    <ul class="page-pagination">

                      <li class="disabled prev">
                        <a href="#">
                          <span><i class="fa fa-angle-left"></i>Back</span>
                        </a>
                      </li>




                      <li class="active"><a href="">1</a></li>




                      <li>
                        <a href="/collections/all?page=2" title="">2</a>
                      </li>



                      <li>
                        <a href="/collections/all?page=3" title="">3</a>
                      </li>



                      <li class="next"><a href="/collections/all?page=2" title="Next &raquo;"><span aria-hidden="true"><i class="fa fa-angle-right"></i>Next</span></a></li>

                    </ul>
                  </nav>
                </div>





                <script>
                  $(".theme-default-pagination .disabled a").removeAttr("href");
                  $(".theme-default-pagination li.active a").removeAttr("href");
                </script>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="shop-sidebar">


              <div class="sidebar">
                <h4 class="sidebar-title">Search</h4>
                <div class="sidebar-search">
                  <form action="/search" method="get" class="" role="search">
                    <input type="hidden" name="type" value="product">
                    <input type="search" name="q" value="" placeholder="Enter key words" aria-label="Search our store">
                    <input type="submit" value="Search">
                  </form>
                </div>
              </div>




              <div class="sidebar">
                <h4 class="sidebar-title">Categories</h4>
                <ul class="sidebar-list">


                  <li class=""><a href="/collections/best-seller">Best Seller <span>(12)</span></a></li>

                  <li class=""><a href="/collections/featured">Featured <span>(16)</span></a></li>

                  <li class=""><a href="/collections/frontpage">Home page <span>(1)</span></a></li>

                  <li class=""><a href="/collections/new-arrival">New Arrival <span>(12)</span></a></li>

                </ul>
              </div>




              <div class="sidebar">
                <h4 class="sidebar-title">Vendors</h4>
                <ul class="sidebar-list">


                  <li class=""><a href="/collections/vendors?q=Vendor%201">Vendor 1</a></li>

                  <li class=""><a href="/collections/vendors?q=Vendor%2010">Vendor 10</a></li>

                  <li class=""><a href="/collections/vendors?q=Vendor%2011">Vendor 11</a></li>

                  <li class=""><a href="/collections/vendors?q=Vendor%2012">Vendor 12</a></li>

                  <li class=""><a href="/collections/vendors?q=Vendor%202">Vendor 2</a></li>

                </ul>
              </div>




              <div class="sidebar">
                <h4 class="sidebar-title">Products Types</h4>
                <ul class="sidebar-list">


                  <li class=""><a href="/collections/types?q=Type%201">Type 1</a></li>
                  <li class=""><a href="/collections/types?q=Type%2010">Type 10</a></li>
                  <li class=""><a href="/collections/types?q=Type%2011">Type 11</a></li>
                  <li class=""><a href="/collections/types?q=Type%2012">Type 12</a></li>
                  <li class=""><a href="/collections/types?q=Type%202">Type 2</a></li>
                </ul>
              </div>




              <div class="sidebar product-sidebar-color">
                <h4 class="sidebar-title">Color</h4>
                <ul class="sidebar-list">





                  <li class="red" style="background: red no-repeat center; background-size: initial;"><a href="/collections/all/red"></a></li>

                  <li class="green" style="background: green no-repeat center; background-size: initial;"><a href="/collections/all/green"></a></li>

                  <li class="blue" style="background: blue no-repeat center; background-size: initial;"><a href="/collections/all/blue"></a></li>

                  <li class="yellow" style="background: yellow no-repeat center; background-size: initial;"><a href="/collections/all/yellow"></a></li>

                  <li class="white" style="background: white no-repeat center; background-size: initial;"><a href="/collections/all/white"></a></li>

                  <li class="gold" style="background: gold no-repeat center; background-size: initial;"><a href="/collections/all/gold"></a></li>

                  <li class="gray" style="background: gray no-repeat center; background-size: initial;"><a href="/collections/all/gray"></a></li>

                  <li class="magenta" style="background: magenta no-repeat center; background-size: initial;"><a href="/collections/all/magenta"></a></li>

                  <li class="maroon" style="background: maroon no-repeat center; background-size: initial;"><a href="/collections/all/maroon"></a></li>

                  <li class="navy" style="background: navy no-repeat center; background-size: initial;"><a href="/collections/all/navy"></a></li>
                </ul>
              </div>





              <div class="sidebar">
                <h4 class="sidebar-title">Size</h4>
                <ul class="tag-cloud">





                  <li><a href="/collections/all/s">s</a></li>

                  <li><a href="/collections/all/m">m</a></li>

                  <li><a href="/collections/all/l">l</a></li>

                  <li><a href="/collections/all/xl">xl</a></li>

                  <li><a href="/collections/all/xxl">xxl</a></li>
                </ul>
              </div>




              <div class="sidebar">
                <h4 class="sidebar-title">Tags</h4>
                <ul class="tag-cloud">


                  <li><a href="/collections/all/black">black</a></li>
                  <li><a href="/collections/all/blue">blue</a></li>
                  <li><a href="/collections/all/fiber">fiber</a></li>
                  <li><a href="/collections/all/gold">gold</a></li>
                  <li><a href="/collections/all/gray">gray</a></li>
                  <li><a href="/collections/all/green">green</a></li>
                  <li><a href="/collections/all/l">l</a></li>
                  <li><a href="/collections/all/leather">leather</a></li>
                  <li><a href="/collections/all/m">m</a></li>
                  <li><a href="/collections/all/magenta">magenta</a></li>
                  <li><a href="/collections/all/maroon">maroon</a></li>
                  <li><a href="/collections/all/metal">metal</a></li>
                  <li><a href="/collections/all/navy">navy</a></li>
                  <li><a href="/collections/all/orange">orange</a></li>
                  <li><a href="/collections/all/pink">pink</a></li>
                </ul>
              </div>




            </div>


            <script>
              $(".sidebar-wedget li.active a").removeAttr("href");
            </script>
          </div>
        </div>
      </div>
    </div>
    <!-- End Shop Page -->

    <style data-shopify>
      .product-view-mode button label i {
        color: ;
      }

      .product-view-mode button label:hover i.hover-icon {
        color: ;
      }
    </style>


  </div>
</main>

<div id="shopify-section-service" class="shopify-section">
  <!-- Service Section Start -->
  <div class="service-section " id="section-service">
    <div class="service-container">
      <div class="row ml-0 mr-0">


        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Free home delivery</h3>



            <p>Provide free home delivery for all product over $100</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Quality Products</h3>



            <p>We ensure the product quality that is our main goal</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>3 Days Return</h3>



            <p>Return product within 3 days for any product you buy</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Online Support</h3>



            <p>We ensure the product quality that you can trust easily</p>

          </div>
        </div>





      </div>
    </div>
  </div><!-- Service Section End -->

  <style data-shopify>
    #section-service {










      margin-top: 0px;
      margin-bottom: -90px;


    }

    @media (max-width: 767px) {
      #section-service {










        margin-top: 0px;
        margin-bottom: 50px;


      }
    }


    #section-service .service-container {
      background-color: ;
      border-color: ;
      border-radius: 0px;
    }

    #section-service .service .content h3 {
      color: ;
    }

    #section-service .service .content p {
      color: ;
    }

    #section-service .service::before {
      background-color: ;
    }
  </style>



</div>
