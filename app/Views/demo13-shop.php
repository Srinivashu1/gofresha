<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?=base_url('assets/images/icons/favicon.png') ?>">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="<?=base_url('assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') ?>" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="<?=base_url('assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') ?>" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="<?=base_url('assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') ?>" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="<?=base_url('assets/fonts/wolmart.ttf?png09e') ?>" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/animate/animate.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/magnific-popup/magnific-popup.min.css') ?>">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/demo13.min.css') ?>">
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <main class="main d-flex">
            <!-- Start of Sidebar -->
            <aside class="sidebar sidebar-switch-xl sticky-sidebar-wrapper left-sidebar sidebar-fixed">
                <div class="sidebar-overlay"></div>
                <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                <a href="#" class="sidebar-close"><i class="close-icon"></i></a>
                <div class="sidebar-content left-sidebar-content scrollable">
                    <div class="dropdown category-dropdown bg-white sticky-sidebar"
                        data-sticky-options="{'minWidth': 1199, 'padding': {'top': 0}, 'paddingOffsetTop': 0}">
                        <a href="demo13.html" class="sidebar-logo bg-white d-block after-none">
                            <img src="assets/images/demos/demo13/logo-1.png" alt="logo" width="145" height="45" />
                        </a>
                        <h3 class="d-block text-dark font-weight-bolder dropdown-title pb-0 mb-0">Departments</h3>
                        <div class="dropdown-box text-default">
                            <ul class="menu vertical-menu category-menu">
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-tshirt"></i>Fashion
                                        <span class="submenu-toggle-btn"></span>
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Women</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">New Arrivals</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Best Sellers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Accessories</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Jewlery & Watches</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Men</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">New Arrivals</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Best Sellers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Trending</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Clothing</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Shoes</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bags</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Accessories</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Jewlery & Watches</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                        width="235" height="347" />
                                                </figure>
                                                <div class="banner-content">
                                                    <div class="banner-price-info mb-1 ls-normal">Get up to
                                                        <strong class="text-secondary text-uppercase">20%Off</strong>
                                                    </div>
                                                    <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                    <a href="demo13-shop.html"
                                                        class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                        Shop Now
                                                        <i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-home"></i>Home & Garden
                                        <span class="submenu-toggle-btn"></span>
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Bedroom</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Beds, Frames & Bases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Nightstands</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Kid's Beds & Headboards</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                            </ul>
                                            <h4 class="menu-title mt-1">Living Room</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Coffee Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Futons & Sofa Beds</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Cabinets & Chests</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Office</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Office Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">File Cabinets</a></li>
                                                <li><a href="shop-fullwidth-banner.html">BreakroomTables</a></li>
                                            </ul>
                                            <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Dining Sets</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Kitchen Storage Cabinets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Bashers Racks</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Room Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner3">
                                                <figure>
                                                    <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                        width="235" height="461" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal text-white mb-1">
                                                        Restroom</h4>
                                                    <h3 class="banner-title font-weight-bolder text-white ls-normal">
                                                        Furniture Sale
                                                    </h3>
                                                    <div class="banner-price-info text-white font-weight-normal ls-25">
                                                        Up to
                                                        <span class="text-secondary text-uppercase font-weight-bold">25%
                                                            Off</span>
                                                    </div>
                                                    <a href="demo13-shop.html"
                                                        class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-electronics"></i>Electronics
                                        <span class="submenu-toggle-btn"></span>
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Laptops &amp; Computers</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Desktop Computers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Monitors</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Laptops</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Hard Drives &amp;Storage</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Computer Accessories</a></li>
                                            </ul>
                                            <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">TVs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Home Audio Speakers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Projectors</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Media Streaming Devices</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Digital Cameras</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Digital SLR Cameras</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Sports & Action Cameras</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Camera Lenses</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Photo Printer</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Digital MemoryCards</a></li>
                                            </ul>
                                            <h4 class="menu-title mt-1">Cell Phones</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Carrier Phones</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Unlocked Phones</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Phone & CellphoneCases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">CellphoneChargers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner4">
                                                <figure>
                                                    <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                        width="235" height="433" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal">Deals Of The Week
                                                    </h4>
                                                    <h3 class="banner-title text-white">Save On Smart EarPhone</h3>
                                                    <div
                                                        class="banner-price-info text-primary font-weight-bolder text-uppercase text-secondary">
                                                        20% Off
                                                    </div>
                                                    <a href="demo13-shop.html"
                                                        class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-sofa"></i>Furniture
                                        <span class="submenu-toggle-btn"></span>
                                    </a>
                                    <ul class="megamenu type2">
                                        <li class="row">
                                            <div class="col-xl-3">
                                                <h4 class="menu-title">Furniture</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Sofas & Couches</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Armchairs</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bed Frames</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Beside Tables</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Dressing Tables</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3">
                                                <h4 class="menu-title">Lighting</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Light Bulbs</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Lamps</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Celling Lights</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Wall Lights</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Bathroom Lighting</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3">
                                                <h4 class="menu-title">Home Accessories</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Decorative Accessories</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">Candals & Holders</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Home Fragrance</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Mirrors</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Clocks</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3">
                                                <h4 class="menu-title">Garden & Outdoors</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">Garden Furniture</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Lawn Mowers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Pressure Washers</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">All Garden Tools</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Outdoor Dining</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #D2D2D2;" />
                                                    </figure>
                                                    <div class="banner-content text-right y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                            New Arrivals
                                                        </h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                            Amazing Sofa
                                                        </h3>
                                                        <div class="banner-price-info font-weight-normal ls-normal">
                                                            Starting at <strong>$125.00</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #9F9888;" />
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                            Best Seller
                                                        </h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                            Chair &amp; Lamp
                                                        </h3>
                                                        <div
                                                            class="banner-price-info font-weight-normal ls-normal text-white">
                                                            From <strong>$165.00</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-toy"></i>toys & Babycare
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-basketball"></i>Sports
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-camera"></i>Cameras &amp; Photo
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-headphone"></i>Speaker
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-kettle"></i>Electric Kettle
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-air-conditioning"></i>Air Conditioning
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-vacuum"></i>Vacuum
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown-special-offers">
                            <h3 class="d-block text-dark font-weight-bolder dropdown-title pl-0 mb-0">Special Offers
                            </h3>
                            <a href="demo13.html">Rollbacks</a>
                            <a href="demo13.html">New Arrivals</a>
                            <a href="demo13.html">Only at Wolmart</a>
                        </div>
                        <div class="dropdown-nav">
                            <h3 class="d-block text-dark font-weight-bolder dropdown-title pl-0 pb-3 mb-0">Customer
                                Services</h3>
                            <nav class="main-nav">
                                <ul class="menu d-block">
                                    <li>
                                        <a href="demo13-shop.html">Shop
                                            <span class="submenu-toggle-btn"></span>
                                        </a>
                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.html">Variable Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.html">Data In Accordion</a></li>
                                                    <li><a href="product-section.html">Data In Sections</a></li>
                                                    <li><a href="product-swatch.html">Image Swatch</a></li>
                                                    <li><a href="product-extended.html">Extended Info</a></li>
                                                    <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                                    <li><a href="product-video.html">360<sup>o</sup> &amp; Video
                                                            <span class="tip tip-new">New</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.html">Default<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.html">Grid Images</a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">Vendor
                                            <span class="submenu-toggle-btn"></span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.html">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.html">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html">Pages
                                            <span class="submenu-toggle-btn"></span>
                                        </a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements.html">Elements
                                            <span class="submenu-toggle-btn"></span>
                                        </a>
                                        <ul>
                                            <li><a href="element-accordions.html">Accordions</a></li>
                                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                            <li><a href="element-buttons.html">Buttons</a></li>
                                            <li><a href="element-cta.html">Call to Action</a></li>
                                            <li><a href="element-icons.html">Icons</a></li>
                                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.html">Instagrams</a></li>
                                            <li><a href="element-categories.html">Product Category</a></li>
                                            <li><a href="element-products.html">Products</a></li>
                                            <li><a href="element-tabs.html">Tabs</a></li>
                                            <li><a href="element-testimonials.html">Testimonials</a></li>
                                            <li><a href="element-titles.html">Titles</a></li>
                                            <li><a href="element-typography.html">Typography</a></li>
                                            <li><a href="element-vendors.html">Vendors</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://d-themes.com/buynow/wolmartwp">Buy Wolmart</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- End of Sidebar -->
            <div class="main-content">
                <div class="banner top-banner banner-fixed">
                    <figure class="banner-media">
                        <img src="assets/images/demos/demo13/banner/top-banner.jpg" alt="Banner" width="1597"
                            height="70" style="background-color: #2D363F;" />
                    </figure>
                    <div class="banner-content d-flex align-items-center x-50 y-50 ml-4">
                        <h3 class="banner-title text-uppercase mb-0 d-md-show">Senior’s Member Discount Days!</h3>
                        <h5 class="banner-price-info font-weight-normal">
                            Save <span class="text-secondary text-uppercase font-weight-bolder">25% OFF </span>Discount
                        </h5>
                        <a href="demo13-shop.html" class="btn btn-sm btn-white btn-outline btn-rounded btn-icon-right">
                            Shop Now<i class="w-icon-long-arrow-right"></i>
                        </a>
                        <i class="w-icon-cart text-white"></i>
                    </div>
                    <a href="#" class="banner-close">
                        <i class="close-icon"></i>
                    </a>
                </div>
                <header class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-left">
                                <p class="welcome-msg ls-25">Welcome to Wolmart Store message or remove it!</p>
                            </div>
                            <div class="header-right">
                                <a href="#">
                                    <i class="w-icon-sale"></i>
                                    <span class="d-md-show">Daily Deals</span>
                                </a>
                                <a href="#">
                                    <i class="w-icon-map-marker mt-0"></i>
                                    <span class="d-md-show">Track Order</span>
                                </a>
                                <span class="divider d-lg-show"></span>
                                <a href="blog.html" class="d-lg-show">Blog</a>
                                <a href="become-a-vendor.html" class="d-lg-show">Become a Vendor</a>
                                <a href="about-us.html" class="d-lg-show">About Us</a>
                                <a href="documentation.html">
                                    <i class="w-icon-exclamation-circle"></i>
                                    <span class="d-md-show">Need Help</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Header Top -->
                    <div class="header-middle sticky-content fix-top sticky-header">
                        <div class="container">
                            <div class="header-left">
                                <a href="demo13.html" class="header-logo bg-white">
                                    <img src="assets/images/demos/demo13/logo.png" alt="logo" width="145" height="45" />
                                </a>
                                <div class="account align-items-center d-md-show">
                                    <a class="login inline-type d-flex ls-normal" href="my-account.html">
                                        <i
                                            class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                                        <span class="flex-column justify-content-center d-xl-show">Hello, Sign In
                                            <b class="d-block font-weight-bolder ls-50">My Account</b>
                                        </span>
                                    </a>
                                </div>
                                <span class="divider mr-4 d-md-show"></span>
                                <div class="dropdown ml-0 mr-5">
                                    <a href="#currency">USD</a>
                                    <div class="dropdown-box">
                                        <a href="#USD">USD</a>
                                        <a href="#EUR">EUR</a>
                                    </div>
                                </div>
                                <!-- End of DropDown Menu -->
                                <div class="dropdown">
                                    <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                            height="8" class="dropdown-image" /> ENG
                                    </a>
                                    <div class="dropdown-box">
                                        <a href="#ENG">
                                            <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                                class="dropdown-image" />
                                            ENG
                                        </a>
                                        <a href="#FRA">
                                            <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                                class="dropdown-image" />
                                            FRA
                                        </a>
                                    </div>
                                </div>
                                <!-- End of Dropdown Menu -->
                                <form method="get" action="#"
                                    class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                                    <div class="select-box bg-white">
                                        <select id="category" name="category">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="5">Furniture</option>
                                            <option value="6">Shoes</option>
                                            <option value="7">Sports</option>
                                            <option value="8">Games</option>
                                            <option value="9">Computers</option>
                                            <option value="10">Electronics</option>
                                            <option value="11">Kitchen</option>
                                            <option value="12">Clothing</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control bg-white" name="search" id="search"
                                        placeholder="Search in..." required />
                                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="header-right ml-4 d-sm-show">
                                <div class="header-call d-lg-show d-lg-flex align-items-center">
                                    <a href="tel:#" class="w-icon-call"></a>
                                    <div class="call-info">
                                        <h4 class="chat font-weight-normal font-size-md text-normal text-white mb-0">
                                            <a href="mailto:#" class="text-capitalize text-dark">Live Chat</a> <span
                                                class="text-dark ls-normal">or:</span>
                                        </h4>
                                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                                    </div>
                                </div>
                                <a class="wishlist label-down link d-lg-show" href="wishlist.html">
                                    <i class="w-icon-heart"></i>
                                    <span class="wishlist-label">Wishlist</span>
                                </a>
                                <a class="compare label-down link d-lg-show" href="compare.html">
                                    <i class="w-icon-compare"></i>
                                    <span class="compare-label">Compare</span>
                                </a>
                                <div class="dropdown cart-dropdown cart-offcanvas d-flex mr-0 mr-lg-2">
                                    <div class="cart-overlay"></div>
                                    <a href="#" class="cart-toggle label-down link">
                                        <i class="w-icon-cart">
                                            <span class="cart-count">2</span>
                                        </i>
                                        <span class="cart-label">Cart</span>
                                    </a>
                                    <div class="dropdown-box">
                                        <div class="cart-header">
                                            <span>Shopping Cart</span>
                                            <a href="#" class="btn-close">Close<i
                                                    class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                        <div class="products">
                                            <div class="product product-cart">
                                                <div class="product-detail">
                                                    <a href="product-default.html" class="product-name">Beige knitted
                                                        elas<br>tic
                                                        runner shoes</a>
                                                    <div class="price-box">
                                                        <span class="product-quantity">1</span>
                                                        <span class="product-price">$25.68</span>
                                                    </div>
                                                </div>
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/cart/product-1.jpg" alt="product"
                                                            height="84" width="94" />
                                                    </a>
                                                </figure>
                                                <button class="btn btn-link btn-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <div class="product product-cart">
                                                <div class="product-detail">
                                                    <a href="product-default.html" class="product-name">Blue utility
                                                        pina<br>fore
                                                        denim dress</a>
                                                    <div class="price-box">
                                                        <span class="product-quantity">1</span>
                                                        <span class="product-price">$32.99</span>
                                                    </div>
                                                </div>
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="assets/images/cart/product-2.jpg" alt="product"
                                                            width="84" height="94" />
                                                    </a>
                                                </figure>
                                                <button class="btn btn-link btn-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="cart-total">
                                            <label>Subtotal:</label>
                                            <span class="price">$58.67</span>
                                        </div>

                                        <div class="cart-action">
                                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View
                                                Cart</a>
                                            <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- End of Dropdown Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Header Middle -->
                </header>
                <div class="container">
                    <!-- Start of Shop Banner -->
                    <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center br-sm mb-6 mt-1 appear-animate"
                        style="background-image: url(assets/images/demos/demo13/banner/shop-banner.jpg); background-color: #5D666B;">
                        <div class="banner-content y-50">
                            <h4 class="banner-subtitle text-uppercase font-weight-normal ls-normal">
                                Women’s Collection
                            </h4>
                            <h3 class="banner-title text-white">
                                Autumn <span class="text-secondary">Season</span>
                            </h3>
                            <a href="#" class="btn btn-white btn-outline btn-rounded">
                                View All Collection
                            </a>
                        </div>
                    </div>
                    <!-- End of Shop Banner -->
                    <!-- Start of Shop Content -->
                    <div class="shop-content toolbox-horizontal appear-animate">
                        <!-- Start of Toolbox -->
                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                            <div class="toolbox-left mr-0">
                                <div class="toolbox-item toolbox-sort select-menu">
                                    <select name="orderby" class="form-control">
                                        <option value="default" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price-low">Sort by pric: low to high</option>
                                        <option value="price-high">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show select-box mr-0">
                                    <select name="count" class="form-control">
                                        <option value="10">Show 10</option>
                                        <option value="15">Show 15</option>
                                        <option value="20">Show 20</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                </div>
                                <div class="toolbox-item toolbox-layout">
                                    <a href="shop-horizontal-filter.html" class="icon-mode-grid btn-layout active">
                                        <i class="w-icon-grid"></i>
                                    </a>
                                    <a href="shop-list.html" class="icon-mode-list btn-layout">
                                        <i class="w-icon-list"></i>
                                    </a>
                                </div>
                            </div>
                            <aside class="sidebar-fixed shop-sidebar right-sidebar">
                                <div class="sidebar-overlay"></div>
                                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                                <div class="sidebar-content toolbox-left">
                                    <!-- Start of Collapsible widget -->
                                    <div class="toolbox-item select-menu">
                                        <a class="select-menu-toggle" href="#">All Categories</a>
                                        <ul class="filter-items">
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Babies</a></li>
                                            <li><a href="#">Beauty</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Electronics</a></li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Food</a></li>
                                            <li><a href="#">Furniture</a></li>
                                            <li><a href="#">Kitchen</a></li>
                                            <li><a href="#">Medical</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Watches</a></li>
                                        </ul>
                                    </div>
                                    <div class="toolbox-item select-menu">
                                        <a class="select-menu-toggle" href="#">Price</a>
                                        <ul class="filter-items">
                                            <li><a href="#">$0.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00+</a></li>
                                            <li>
                                                <form class="price-range">
                                                    <input type="number" name="min_price" class="min_price text-center"
                                                        placeholder="$min"><span class="delimiter">-</span><input
                                                        type="number" name="max_price" class="max_price text-center"
                                                        placeholder="$max"><a href="#"
                                                        class="btn btn-primary btn-rounded">Go</a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toolbox-item select-menu">
                                        <a class="select-menu-toggle" href="#">Size</a>
                                        <ul class="filter-items item-check">
                                            <li><a href="#">Extra Large</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Small</a></li>
                                        </ul>
                                    </div>
                                    <div class="toolbox-item select-menu">
                                        <a class="select-menu-toggle" href="#">Brand</a>
                                        <ul class="filter-items item-check">
                                            <li><a href="#">Elegant Auto Group</a></li>
                                            <li><a href="#">Green Grass</a></li>
                                            <li><a href="#">Node Js</a></li>
                                            <li><a href="#">NS8</a></li>
                                            <li><a href="#">Red</a></li>
                                            <li><a href="#">Skysuite Tech</a></li>
                                            <li><a href="#">Sterling</a></li>
                                        </ul>
                                    </div>
                                    <div class="toolbox-item select-menu">
                                        <a class="select-menu-toggle" href="#">Color</a>
                                        <ul class="filter-items item-check">
                                            <li><a href="#">Black</a></li>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#">Grey</a></li>
                                            <li><a href="#">Orange</a></li>
                                            <li><a href="#">Yellow</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
                                </div>
                            </aside>
                            <a href="#" class="btn btn-primary btn-outline btn-rounded right-sidebar-toggle 
                                    btn-icon-left d-block d-lg-none mb-2 ml-auto"><i
                                    class="w-icon-category"></i><span>Filters</span></a>
                        </nav>
                        <!-- End of Toolbox -->

                        <!-- Start of Selected Items -->
                        <div class="selected-items mb-3">
                            <a href="#" class="filter-clean text-primary">Clean All</a>
                        </div>
                        <!-- End of Selected Items -->

                        <!-- Start of Product Wrapper -->
                        <div class="product-wrapper row cols-xl-5 cols-lg-4 cols-sm-3 cols-2 mb-4">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/2-1-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/2-1-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-hot">Hot</label>
                                            <label class="product-label label-sale">19% off</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">USB Charger</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$17.00</ins><del class="old-price">$20.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/2-2-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/2-2-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Red Cap Sound Marker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$13,535.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/2-4-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/2-4-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Headkerchief</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$27.00</ins><del class="old-price">$28.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/2-5-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/2-5-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Best Travel Bag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$80.00</ins><del class="old-price">$83.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/2-6-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/2-6-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Magenetic Charge Box</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$75.65</ins><del class="old-price">$79.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/1-7-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/1-7-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Men's Suede Belt</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$25.12</ins><del class="old-price">$26.49</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/3-1-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/3-1-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Four Wings Fan</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$312.00</ins><del class="old-price">$320.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/3-2-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/3-2-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Armchair</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$13,535.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/3-3-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/3-3-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Headkerchief</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$27.00</ins><del class="old-price">$28.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo13/products/3-4-1.jpg" alt="Product"
                                                width="300" height="337">
                                            <img src="assets/images/demos/demo13/products/3-4-2.jpg" alt="Product"
                                                width="300" height="337">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Best Travel Bag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$80.00</ins><del class="old-price">$83.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product Wrapper -->

                        <!-- Start of Pagination -->
                        <div class="toolbox toolbox-pagination justify-content-between mb-6">
                            <p class="showing-info mb-2 mb-sm-0">
                                Showing<span>1-12 of 60</span>Products
                            </p>
                            <ul class="pagination">
                                <li class="prev disabled">
                                    <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="w-icon-long-arrow-left"></i>Prev
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        Next<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Pagination -->
                    </div>
                    <!-- Start of Sidebar, Shop Sidebar -->
                    <aside class="shop-sidebar right-sidebar sticky-sidebar-wrapper">
                        <!-- Start of Sidebar Overlay -->
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                        <!-- Start of Sidebar Content -->
                        <div class="sidebar-content scrollable">
                            <div class="filter-actions">
                                <label>Filter :</label>
                                <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                            </div>
                            <!-- Start of Collapsible widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>All Categories</span></h3>
                                <ul class="widget-body filter-items search-ul">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Babies</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Decoration</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Kitchen</a></li>
                                    <li><a href="#">Medical</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Watches</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Price</span></h3>
                                <div class="widget-body">
                                    <ul class="filter-items search-ul">
                                        <li><a href="#">$0.00 - $100.00</a></li>
                                        <li><a href="#">$100.00 - $200.00</a></li>
                                        <li><a href="#">$200.00 - $300.00</a></li>
                                        <li><a href="#">$300.00 - $500.00</a></li>
                                        <li><a href="#">$500.00+</a></li>
                                    </ul>
                                    <form class="price-range">
                                        <input type="number" name="min_price" class="min_price text-center"
                                            placeholder="$min"><span class="delimiter">-</span><input type="number"
                                            name="max_price" class="max_price text-center" placeholder="$max"><a
                                            href="#" class="btn btn-primary btn-rounded">Go</a>
                                    </form>
                                </div>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Size</span></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Extra Large</a></li>
                                    <li><a href="#">Large</a></li>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Small</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Brand</span></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Elegant Auto Group</a></li>
                                    <li><a href="#">Green Grass</a></li>
                                    <li><a href="#">Node Js</a></li>
                                    <li><a href="#">NS8</a></li>
                                    <li><a href="#">Red</a></li>
                                    <li><a href="#">Skysuite Tech</a></li>
                                    <li><a href="#">Sterling</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Color</span></h3>
                                <ul class="widget-body filter-items item-check">
                                    <li><a href="#">Black</a></li>
                                    <li><a href="#">Blue</a></li>
                                    <li><a href="#">Brown</a></li>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#">Grey</a></li>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">Yellow</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->
                        </div>
                        <!-- End of Sidebar Content -->
                    </aside>
                    <!-- End of Shop Sidebar -->
                    <!-- End of Shop Content -->

                </div>
                <!-- Start of Footer -->
                <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
            }">
                    <div class="footer-newsletter bg-primary">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="icon-box icon-box-side text-white">
                                        <div class="icon-box-icon d-inline-flex">
                                            <i class="w-icon-envelop3"></i>
                                        </div>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title text-uppercase text-white font-weight-bold">
                                                Subscribe To Our Newsletter</h4>
                                            <p class="text-white">Get all the latest information on Events, Sales and
                                                Offers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                                    <form action="#" method="get"
                                        class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                        <input type="email" class="form-control text-dark bg-white border-no pl-3 mr-2"
                                            name="email" id="email" placeholder="Your E-mail Address" />
                                        <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                                class="w-icon-long-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Newsletter -->
                    <div class="container">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="widget widget-about">
                                        <a href="demo13.html" class="logo-footer">
                                            <img src="assets/images/demos/demo13/logo-1.png" alt="logo-footer"
                                                width="144" height="45" />
                                        </a>
                                        <div class="widget-body">
                                            <p class="widget-about-title">Got Question? Call us 24/7</p>
                                            <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                            <p class="widget-about-desc mb-4">Register now to get updates on pronot get
                                                up icons
                                                & coupons ster now toon.
                                            </p>

                                            <div class="social-icons social-icons-colored">
                                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h3 class="widget-title">Company</h3>
                                        <ul class="widget-body">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="#">Team Member</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="#">Affilate</a></li>
                                            <li><a href="#">Order History</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h4 class="widget-title">My Account</h4>
                                        <ul class="widget-body">
                                            <li><a href="#">Track My Order</a></li>
                                            <li><a href="cart.html">View Cart</a></li>
                                            <li><a href="login.html">Sign In</a></li>
                                            <li><a href="#">Help</a></li>
                                            <li><a href="wishlist.html">My Wishlist</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Customer Service</h4>
                                        <ul class="widget-body">
                                            <li><a href="#">Payment Methods</a></li>
                                            <li><a href="#">Money-back guarantee!</a></li>
                                            <li><a href="#">Product Returns</a></li>
                                            <li><a href="#">Support Center</a></li>
                                            <li><a href="#">Shipping</a></li>
                                            <li><a href="#">Term and Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End fo Footer Top -->
                    </div>
                    <!-- End of Container -->
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="footer-left">
                                <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                            </div>
                            <div class="footer-right">
                                <span class="payment-label mr-lg-8">We're using safe payment for</span>
                                <figure class="payment">
                                    <img src="assets/images/payment.png" alt="payment" width="159" height="25" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- End of Footer Bottom -->
                </footer>
                <!-- End of Footer -->
            </div>
        </main>
    </div>
    <!-- End of Page-wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo13.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="demo13-shop.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Blue utility pina<br>fore denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button">
        <i class="w-icon-angle-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg>
    </a>
    <!-- End of Scroll Top -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="<?=base_url('/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/sticky/sticky.js') ?>"></script>
    <script src="<?=base_url('/vendor/jquery.plugin/jquery.plugin.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/skrollr/skrollr.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?=base_url('/vendor/zoom/jquery.zoom.js') ?>"></script>
    <script src="<?=base_url('/vendor/jquery.countdown/jquery.countdown.min.js') ?>"></script>


    <!-- Main JS -->
    <script src="<?=base_url('/js/main.min.js') ?>"></script>
</body>

</html>