@extends ('shop.layouts.main')

@section ('content')
<!-- HEADER-BOTTOM-AREA START -->
<section class="header-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <!-- LEFT-CATEGORY-MENU START -->
                <div class="left-category-menu">
                    <div class="left-product-cat">
                        <div class="category-heading">
                            <h2>Danh Mục</h2>
                        </div>
                        <!-- CATEGORY-MENU-LIST START -->
                        <div class="category-menu-list">
                            <ul>
                                @if(!empty($categories))
                                @foreach($categories as $categorie)
                                <li>
                                    <!-- Bước 1 :  Hiển thị danh mục cha -->
                                    @if($categorie->parent_id == 0)
                                    <a href="shop-gird.html">
                                        {{ $categorie->name }}<i class="fa fa-angle-right"></i>
                                    </a>

                                    <!-- Bước 2 : Hiển thị danh mục con -->
                                    <div class="cat-left-drop-menu-single">
                                        <ul>
                                            @foreach($categories as $child)
                                            @if($categorie->id == $child->parent_id)
                                            <li><a href="shop-gird.html">{{ $child->name }}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <!-- CATEGORY-MENU-LIST END -->
                    </div>
                </div>
                <!-- LEFT-CATEGORY-MENU END -->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- MAIN-SLIDER-AREA START -->
                <div class="main-slider-area">
                    <div class="slider-area">
                        <div id="wrapper">
                            <!-- Kiểm tra nếu có dữ liệu banners thì mới hiển thị -->
                            @if(!empty($banners))
                            <div class="slider-wrapper">
                                <div id="mainSlider" class="nivoSlider">
                                    @foreach($banners as $banner)
                                    <a href="#"><img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}"/></a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- MAIN-SLIDER-AREA END -->
            </div>
        </div>
    </div>
</section>

<!-- HEADER-BOTTOM-AREA END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <!-- LEFT-SIDEBAR START -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <!-- SIDEBAR-LEFT-ADD START -->
                <div class="single-left-sidebar sidebar-left-add">
                    <div class="sidebar-left zoom-img">
                        <a href="#"><img src="shop/img/product/cms11.jpg" alt="sidebar left" /></a>
                    </div>
                </div>
                <!-- SIDEBAR-LEFT-ADD END -->
                <!-- LEFT SIDEBAR-BEST-SELLER START -->
                <div class="single-left-sidebar sidebar-best-seller">
                    <div class="left-title-area">
                        <h2 class="left-title">Danh Muc</h2>
                    </div>
                    <div class="row">
                        <!-- SIDEBAR-BEST-SELLER-CAROUSEL START -->
                        <div class="sidebar-best-seller-carousel">
                            <!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/1.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Blouse</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$22.95</span>
                                            <span class="old-price">$27.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/2.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Faded Short Sllev...</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/3.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$23.40</span>
                                            <span class="old-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/4.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Printed Summer...</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item  hidden-sm">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/5.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Printed Chiffon D...</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$16.40</span>
                                            <span class="old-price">$20.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
                            <!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="sidebar-product-image">
                                        <a href="single-product.html"><img src="shop/img/product/sidebar_product/6.jpg" alt="product-image" /></a>
                                    </div>
                                    <div class="product-info sede-pro-info">
                                        <a href="single-product.html">Printed Summer...</a>
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price">$28.98</span>
                                            <span class="old-price">$30.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
                        </div>
                        <!-- SIDEBAR-BEST-SELLER-CAROUSEL END -->
                    </div>
                </div>
                <!-- LEFT SIDEBAR-BEST-SELLER END -->
            </div>
            <!-- LEFT-SIDEBAR END -->
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="new-product-area">
                            <div class="left-title-area">
                                <h2 class="left-title">New Products</h2>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <!-- HOME2-NEW-PRO-CAROUSEL START -->
                                        <div class="home2-new-pro-carousel">
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/8.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>3 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$26.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/6.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>4 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Chiffon Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$16.40</span>
                                                                <span class="old-price">$20.50</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/4.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                            <div class="price-box">
                                                                <span class="price">$16.51</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/2.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Blouse</a>
                                                            <div class="price-box">
                                                                <span class="price">$27.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/10.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$26.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/11.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$26.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/3.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                                            <div class="price-box">
                                                                <span class="price">$16.51</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/1.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">sale!</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Blouse</a>
                                                            <div class="price-box">
                                                                <span class="price">$22.95</span>
                                                                <span class="old-price">$27.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/9.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">sale!</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$23.40</span>
                                                                <span class="old-price">$26.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                            <!-- NEW-PRODUCT SINGLE ITEM START -->
                                            <div class="item">
                                                <div class="new-product">
                                                    <div class="single-product-item">
                                                        <div class="product-image">
                                                            <a href="#"><img src="shop/img/product/sale/5.jpg" alt="product-image" /></a>
                                                            <a href="#" class="new-mark-box">new</a>
                                                            <div class="overlay-content">
                                                                <ul>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="customar-comments-box">
                                                                <div class="rating-box">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-empty"></i>
                                                                </div>
                                                                <div class="review-box">
                                                                    <span>1 Review(s)</span>
                                                                </div>
                                                            </div>
                                                            <a href="single-product.html">Printed Dress</a>
                                                            <div class="price-box">
                                                                <span class="price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- NEW-PRODUCT SINGLE ITEM END -->
                                        </div>
                                        <!-- HOME2-NEW-PRO-CAROUSEL END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <!-- TOW-COLUMN-ADD START -->
                        <div class="tow-column-add zoom-img">
                            <a href="#"><img src="shop/img/product/shope-add12.jpg" alt="shope-add" /></a>
                        </div>
                        <!-- TOW-COLUMN-ADD END -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <!-- TOW-COLUMN-ADD START -->
                        <div class="one-column-add zoom-img">
                            <a href="#"><img src="shop/img/product/shope-add22.jpg" alt="shope-add" /></a>
                        </div>
                        <!-- TOW-COLUMN-ADD END -->
                    </div>
                    <div class="col-xs-12">
                        <!-- SALE-PODUCT-AREA START -->
                        <div class="sale-poduct-area new-product-area">
                            <div class="left-title-area">
                                <h2 class="left-title">Sale Products</h2>
                            </div>
                            <div class="row">
                                <!-- HOME2-SALE-CAROUSEL START -->
                                <div class="home2-sale-carousel">
                                    <!-- NEW-PRODUCT SINGLE ITEM START -->
                                    <div class="item">
                                        <div class="new-product">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="shop/img/product/sale/12.jpg" alt="product-image" /></a>
                                                    <a href="#" class="new-mark-box">new</a>
                                                    <div class="overlay-content">
                                                        <ul>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="single-product.html">Printed Summer Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$28.98</span>
                                                        <span class="old-price">$30.51</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- NEW-PRODUCT SINGLE ITEM END -->
                                    <!-- NEW-PRODUCT SINGLE ITEM START -->
                                    <div class="item">
                                        <div class="new-product">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="shop/img/product/sale/9.jpg" alt="product-image" /></a>
                                                    <a href="#" class="new-mark-box">sale!</a>
                                                    <div class="overlay-content">
                                                        <ul>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="single-product.html">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$23.40</span>
                                                        <span class="old-price">$26.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- NEW-PRODUCT SINGLE ITEM END -->
                                    <!-- NEW-PRODUCT SINGLE ITEM START -->
                                    <div class="item">
                                        <div class="new-product">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="shop/img/product/sale/1.jpg" alt="product-image" /></a>
                                                    <a href="#" class="new-mark-box">sale!</a>
                                                    <div class="overlay-content">
                                                        <ul>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="single-product.html">Blouse</a>
                                                    <div class="price-box">
                                                        <span class="price">$22.95</span>
                                                        <span class="old-price">$27.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- NEW-PRODUCT SINGLE ITEM END -->
                                    <!-- NEW-PRODUCT SINGLE ITEM START -->
                                    <div class="item">
                                        <div class="new-product">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="shop/img/product/sale/6.jpg" alt="product-image" /></a>
                                                    <a href="#" class="new-mark-box">new</a>
                                                    <div class="overlay-content">
                                                        <ul>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>4 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- NEW-PRODUCT SINGLE ITEM END -->
                                    <!-- NEW-PRODUCT SINGLE ITEM START -->
                                    <div class="item">
                                        <div class="new-product">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src="shop/img/product/sale/7.jpg" alt="product-image" /></a>
                                                    <a href="#" class="new-mark-box">new</a>
                                                    <div class="overlay-content">
                                                        <ul>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="single-product.html">Printed Chiffon Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- NEW-PRODUCT SINGLE ITEM END -->
                                </div>
                                <!-- HOME2-SALE-CAROUSEL END -->
                            </div>
                        </div>
                        <!-- SALE-PODUCT-AREA end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section-full-column">
    <div class="container">
        <div class="row">
            <!-- IMAGE-ADD-AREA START -->
            <div class="image-add-area">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <!-- SINGLE ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="shop/img/product/cms21.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- SINGLE ADD END -->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <!-- SINGLE ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="shop/img/product/cms22.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- SINGLE ADD END -->
                </div>
            </div>
            <!-- IMAGE-ADD-AREA END -->
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- FEATURED-PRODUCTS-AREA START -->
                <div class="featured-products-area">
                    <div class="left-title-area">
                        <h2 class="left-title">Featured Products</h2>
                    </div>
                    <div class="row">
                        <!-- FEARTURED-CAROUSEL START -->
                        <div class="feartured-carousel">
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/3.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <div class="price-box">
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/1.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">sale!</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Blouse</a>
                                        <div class="price-box">
                                            <span class="price">$22.95</span>
                                            <span class="old-price">$27.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/9.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">sale!</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$23.40</span>
                                            <span class="old-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/5.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/12.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$28.98</span>
                                            <span class="old-price">$30.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/13.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/7.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <div class="price-box">
                                            <span class="price">$16.40</span>
                                            <span class="old-price">$20.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/11.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/10.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/2.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Blouse</a>
                                        <div class="price-box">
                                            <span class="price">$27.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/4.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <div class="price-box">
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/6.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <div class="price-box">
                                            <span class="price">$16.40</span>
                                            <span class="old-price">$20.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/8.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/13.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/12.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$28.98</span>
                                            <span class="old-price">$30.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/3.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                            <!-- SINGLE ITEM START -->
                            <div class="item">
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/7.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$28.98</span>
                                            <span class="old-price">$30.51</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- SINGLE-PRODUCT-ITEM START -->
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="shop/img/product/sale/8.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review(s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE-PRODUCT-ITEM END -->
                            </div>
                            <!-- SINGLE ITEM END -->
                        </div>
                        <!-- FEARTURED-CAROUSEL END -->
                    </div>
                </div>
                <!-- FEATURED-PRODUCTS-AREA END -->
            </div>
        </div>
        <div class="row">
            <!-- IMAGE-ADD-AREA START -->
            <div class="image-add-area">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- SINGLE ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img alt="shope-add" src="shop/img/product/one-helf1.jpg"></a>
                    </div>
                    <!-- SINGLE ADD END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- SINGLE ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img alt="shope-add" src="shop/img/product/one-helf2.jpg"></a>
                    </div>
                    <!-- SINGLE ADD END -->
                </div>
            </div>
            <!-- IMAGE-ADD-AREA END -->
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="latest-news-row">
                <div class="center-title-area">
                    <h2 class="center-title"><a href="#">latest news</a></h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- LATEST-NEWS-CAROUSEL START -->
                        <div class="latest-news-carousel">
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/1.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Lorem Ipsum?</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/2.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Share the Love for printing</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/3.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Answers your Questions P..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/4.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – History</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/5.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Share the Love for..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/6.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – The History a..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/3.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Answers your Questions P..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="shop/img/latest-news/4.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – History</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                        </div>
                        <!-- LATEST-NEWS-CAROUSEL START -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST-NEWS-AREA END -->

@endsection
