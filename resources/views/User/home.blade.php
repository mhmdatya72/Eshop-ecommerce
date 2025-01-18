@extends('Layout.app')
@section('content')
<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 Fol-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">
                                    <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                    <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                                    <div class="button">
                                        <a href="#" class="btn">Shop Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="data:image/jpeg;base64,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" alt="#">
                    <div class="content">
                        <p>Man's Collectons</p>
                        <h3>Summer travel <br> collection</h3>
                        <a href="#">Discover Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="https://via.placeholder.com/600x370" alt="#">
                    <div class="content">
                        <p>Bag Collectons</p>
                        <h3>Awesome Bag <br> 2020</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12">
                <div class="single-banner tab-height">
                    <img src="https://via.placeholder.com/600x370" alt="#">
                    <div class="content">
                        <p>Flash Sale</p>
                        <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
                        <a href="#">Discover Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->

@include("User.Trending Item")
@include("User.Hot Item")
@include("User.From Our Blog")
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>Flared Shift Dress</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#"> (1 customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                </div>
                            </div>
                            <h3>$29.00</h3>
                            <div class="quickview-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                            </div>
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            <option selected="selected">s</option>
                                            <option>m</option>
                                            <option>l</option>
                                            <option>xl</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Color</h5>
                                        <select>
                                            <option selected="selected">orange</option>
                                            <option>purple</option>
                                            <option>black</option>
                                            <option>pink</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn">Add to cart</a>
                                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                            </div>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
