
            <!--Small Banners-->
            <div class="section imgBanners pt-0">
            	<div class="container">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner1.jpg" src="assets/images/home3-small-banner1.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $70<h5>Shoes Collection</h5></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner2.jpg" src="assets/images/home3-small-banner2.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $50<h5>Trendy Bags</h5></div>
                                </div>
                            </div>
                            <div class="imgBnrOuter mt-4">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner3.jpg" src="assets/images/home3-small-banner3.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $20<h5>ACCESSORIES</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Small Banners-->

            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Hot Seller</h2>
                            </div>
                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">WOMEN</li>
                                    <li rel="tab2">HAT</li>
                                    <li rel="tab3">KIDS</li>
                                </ul>
                                <div class="tab_container">

                                  <!--Wmen-->
                                    <div id="tab1" class="tab_content grid-products style3">
                                        <div class="productSlider">

                                          <?php foreach ($data_sanpham1 as $value) {?>

                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                  <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Sales</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                    <div class="variants add btn-style2">
                                                        <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" id="add-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                    </div>

                                                    <div class="variants add btn-style2">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" id="add-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-search-plus-r"></i></a>
                                                    </div>
                                            
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                          <?php } ?>


                                        </div>
                                    </div>

                                    <!--Men-->

                                    <div id="tab2" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <?php foreach ($data_sanpham2 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl pr-label1">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                  <div class="variants add btn-style2">
                                                      <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                  </div>
                                                  <div class="variants add btn-style2">
                                                  <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-search-plus-r"></i></a>
                                                  </div>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--Sale-->





                                    <div id="tab3" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                          <?php foreach ($data_sanpham3 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl pr-label1">Feature</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                  <div class="variants add btn-style2">
                                                      <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                  </div>
                                                  <div class="variants add btn-style2">
                                                  <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-search-plus-r"></i></a>
                                                  </div>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                      <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Collection Tab slider-->

            <!--Feature Content-->
            <div class="section feature-content">
            	<div class="container">
                	<div class="row">
                    	<div class="feature-row">
                            <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                                <img src="assets/images/anh1.jpeg" title="Fast Fashion Only available at BElle" />
                            </div>
                        	<div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                        		<div class="row-text">
                                    <h2 class="h2">Web site fashion FSM</h2>
                                    <div class="rte-setting featured-row__subtext"><p>The life of the internet is the farewell of people, everything in life gradually becomes more colorful, convenient, and faster thanks to it. As everyone knows, the whole world is having a common "war" with the covid-19 pandemic, so moving to the street has been extremely difficult, including shopping. But thanks to the internet it has become so much easier with just a few clicks we can buy whatever we need.</p>
                                    <p>FSM - Prominent, a small fashion store, has noticed this trend. Therefore, they asked us to create a website so that people can easily order the items they love without having to go out to the store in person. Moreover, the company wants to Get customer feedback to improve our service better and better.</p></div>
                                    <a href="?act=shop" class="btn">Shop Now</a>
                          		</div>
                        	</div>
                      	</div>
                    </div>
                </div>
            </div>
            <!--Feature Content-->

            <!--Instagram Section-->
            <div class="section instagram-feed-section">
            	<div class="section-header text-center">
                    <h2 class="h2 heading-font">Thank you very much for visiting</h2>
                </div>
                <!--Instagram ID-->
            	<div id="instafeed" class="imlow_resolution"></div>
                <!--End Instagram ID-->
            </div>
            <!--End Instagram Section-->

        <!--End Body Content-->
