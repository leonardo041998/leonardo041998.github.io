@extends('themes.partials.main')

@section('content')

<div class="shop-page-wrapper shop-page-padding ptb-100">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3">
              <div class="shop-sidebar mr-50">
                  <div class="sidebar-widget mb-50">
                      <h3 class="sidebar-title">Search Products</h3>
                      <div class="sidebar-search">
                          <form action="#">
                              <input placeholder="Search Products..." type="text">
                              <button><i class="ti-search"></i></button>
                          </form>
                      </div>
                    </div>
                  <div class="sidebar-widget mb-45">
                      <h3 class="sidebar-title">Categories</h3>
                      <div class="sidebar-categories">
                          <ul>
                              <li><a href="#">Jam Tangan<span>4</span></a></li>
                              <li><a href="#">Tas <span>9</span></a></li>
                              <li><a href="#">Sepatu<span>5</span> </a></li>
                              <li><a href="#">Kaos Pendek<span>3</span></a></li>
                              <li><a href="#">Celana Panjang <span>4</span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="sidebar-widget mb-40">
                      <h3 class="sidebar-title">size</h3>
                      <div class="product-size">
                          <ul>
                              <li><a href="#">s</a></li>
                              <li><a href="#">m</a></li>
                              <li><a href="#">l</a></li>
                              <li><a href="#">xl</a></li>
                              <li><a href="#">42</a></li>
                              <li><a href="#">44</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="sidebar-widget mb-50">
                      <h3 class="sidebar-title">Top rated products</h3>
                      <div class="sidebar-top-rated-all">
                          <div class="sidebar-top-rated mb-30">
                              <div class="single-top-rated">
                                  <div class="top-rated-img">
                                      <a href="#"><img src="img/product/sidebar-product/fashion_11.jpg" width="88" height="91"></a>
                                  </div>
                                  <div class="top-rated-text">
                                      <h4><a href="#">Adidas Duramo SL Shoes</a></h4>
                                      <div class="top-rated-rating">
                                          <ul>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                          </ul>
                                      </div>
                                      <span>Rp 850.000</span>
                                  </div>
                              </div>
                          </div>
                          <div class="sidebar-top-rated mb-30">
                              <div class="single-top-rated">
                                  <div class="top-rated-img">
                                      <a href="#"><img src="img/product/sidebar-product/fashion_06.jpg" width="88" height="91"></a>
                                  </div>
                                  <div class="top-rated-text">
                                      <h4><a href="#">Casio Black Resin Strap AE-1000W-1AV</a></h4>
                                      <div class="top-rated-rating">
                                          <ul>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                          </ul>
                                      </div>
                                      <span>Rp 630.000</span>
                                  </div>
                              </div>
                          </div>
                          <div class="sidebar-top-rated mb-30">
                              <div class="single-top-rated">
                                  <div class="top-rated-img">
                                      <a href="#"><img src="img/product/sidebar-product/fashion_12.jpg" width="88" height="91"></a>
                                  </div>
                                  <div class="top-rated-text">
                                      <h4><a href="#">Relaxed Fit Linen-blend shir</a></h4>
                                      <div class="top-rated-rating">
                                          <ul>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                          </ul>
                                      </div>
                                      <span>Rp 290.990</span>
                                  </div>
                              </div>
                          </div>
                          <div class="sidebar-top-rated mb-30">
                              <div class="single-top-rated">
                                  <div class="top-rated-img">
                                      <a href="#"><img src="img/product/sidebar-product/fashion_07.jpg" width="88" height="91"></a>
                                  </div>
                                  <div class="top-rated-text">
                                      <h4><a href="#">Relaxed Fit T-shirt</a></h4>
                                      <div class="top-rated-rating">
                                          <ul>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                              <li><i class="pe-7s-star"></i></li>
                                          </ul>
                                      </div>
                                      <span>Rp 168.990</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9">
              <div class="shop-product-wrapper res-xl res-xl-btn">
                  <div class="shop-bar-area">
                      <div class="shop-bar pb-60">
                          <div class="shop-found-selector">
                              <div class="shop-found">
                                  <p><span>12</span> Product Found of <span>50</span></p>
                              </div>
                          </div>
                          <div class="shop-filter-tab">
                              <div class="shop-tab nav" role=tablist>
                                  <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                                      <i class="ti-layout-grid4-alt"></i>
                                  </a>
                                  <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                                      <i class="ti-menu"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="shop-product-content tab-content">
                          <div id="grid-sidebar1" class="tab-pane fade active show">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_07.jpg" width="400" height="212">
                                              </a>
                                              <span>hot</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Relaxed Fit T-shirt </a></h4>
                                              <span>Rp 168.990</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_03.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Airwalk Theseus Backpack</a></h4>
                                              <span>Rp 259.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_09.jpg" width="400" height="212">
                                              </a>
                                              <span>new</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">ADIDAS sportswear future icons 3-stripes pants</a></h4>
                                              <span>Rp 750.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_01.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Dagger Watch</a></h4>
                                              <span>Rp 245.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_02.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Homme Tapered Smart</a></h4>
                                              <span>Rp 124.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_04.jpg" width="400" height="212">
                                              </a>
                                              <span>sell</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Digitec Smart Watch</a></h4>
                                              <span>Rp 682.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_05.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Navy Bird Print</a></h4>
                                              <span>Rp 225.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_08.jpg" width="400" height="212">
                                              </a>
                                              <span>hot</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Leg Smart Trousers</a></h4>
                                              <span>Rp 178.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_10.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Brown Faux Suede</a></h4>
                                              <span>Rp 560.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_06.jpg" width="400" height="212">
                                              </a>
                                              <span>new</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Casio Black Resin Strap AE-1000W-1AV</a></h4>
                                              <span>Rp 630.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_11.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Adidas Duramo SL Shoes</a></h4>
                                              <span>Rp 850.000</span>
                                          </div>
                                      </div>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-xl-3">
                                      <div class="product-wrapper mb-30">
                                          <div class="product-img">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_12.jpg" width="400" height="212"">
                                              </a>
                                              <span>hot</span>
                                              <div class="product-action">
                                                  <a class="animate-left" title="Wishlist" href="#">
                                                      <i class="pe-7s-like"></i>
                                                  </a>
                                                  <a class="animate-top" title="Add To Cart" href="#">
                                                      <i class="pe-7s-cart"></i>
                                                  </a>
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content">
                                              <h4><a href="#">Relaxed Fit Linen-blend shirt</a></h4>
                                              <span>Rp 299.990</span>
                                          </div>
                                      </div>
                                 </div>
                              </div>
                          </div>
                          <div id="grid-sidebar2" class="tab-pane fade">
                              <div class="row">
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_07.jpg" width="400" height="212">
                                              </a>
                                              <span>hot</span>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">Relaxed Fit T-shirt</a></h4>
                                                  <span>Rp 168.990</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_03.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">Airwalk Theseus Backpackt</a></h4>
                                                  <span>Rp 259.000</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_09.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">ADIDAS sportswear future icons 3-stripes pants</a></h4>
                                                  <span>Rp 750.000</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_01.jpg" width="400" height="212">
                                              </a>
                                              <span>new</span>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">Dagger Watch</a></h4>
                                                  <span>Rp 245.000</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_02.jpg" width="400" height="212">
                                              </a>
                                              <span>hot</span>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">Homme Tapered Smart </a></h4>
                                                  <span>Rp 124.000</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12 col-xl-6">
                                      <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                          <div class="product-img list-img-width">
                                              <a href="#">
                                                  <img src="img/product/fashion-colorful/fashion_04.jpg" width="400" height="212">
                                              </a>
                                              <div class="product-action-list-style">
                                                  <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                      <i class="pe-7s-look"></i>
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-content-list">
                                              <div class="product-list-info">
                                                  <h4><a href="#">Digitec Smart Watch</a></h4>
                                                  <span>Rp 682.000</span>
                                                  <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                              </div>
                                              <div class="product-list-cart-wishlist">
                                                  <div class="product-list-cart">
                                                      <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                  </div>
                                                  <div class="product-list-wishlist">
                                                      <a class="btn-hover list-btn-wishlist" href="#">
                                                          <i class="pe-7s-like"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="pagination-style mt-30 text-center">
                  <ul>
                      <li><a href="#"><i class="ti-angle-left"></i></a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">...</a></li>
                      <li><a href="#">19</a></li>
                      <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
    
@endsection