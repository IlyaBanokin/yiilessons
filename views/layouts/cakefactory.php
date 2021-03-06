<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <!-- Title here -->
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->registerCsrfMetaTags() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="index.html#">
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

    <!-- Shopping cart Modal -->
    <div class="modal fade" id="shoppingcart1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Shopping Cart</h4>
                </div>
                <div class="modal-body">
                    <!-- Items table -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="index.html#">Exception Reins Evocative</a></td>
                            <td>2</td>
                            <td>$200</td>
                        </tr>
                        <tr>
                            <td><a href="index.html#">Taut Mayoress Alias Appendicitis</a></td>
                            <td>1</td>
                            <td>$190</td>
                        </tr>
                        <tr>
                            <td><a href="index.html#">Sinter et Molests Perfectionist</a></td>
                            <td>4</td>
                            <td>$99</td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Total</th>
                            <th>$489</th>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
                    <button type="button" class="btn btn-info">Checkout</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Model End -->

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Start -->

        <div class="header">
            <div class="container">
                <!-- Header top area content -->
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <!-- Header top left content contact -->
                            <div class="header-contact">
                                <!-- Contact number -->
                                <span><i class="fa fa-phone red"></i> 888-888-8888</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <!-- Header top right content search box -->
                            <div class=" header-search">
                                <form class="form" role="form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i
                                                        class="fa fa-search"></i></button>
										  </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <!-- Button Kart -->
                            <div class="btn-cart-md dropdown">
                                <a class="cart-link dropdown-toggle" data-toggle="dropdown" href="index.html#">
                                    <!-- Image -->
                                    <img class="img-responsive" src="img/cart.png" alt=""/>
                                    <!-- Heading -->
                                    <h4>Shopping Cart</h4>
                                    <span>3 items $489/-</span>
                                    <div class="clearfix"></div>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <!-- Cart items for shopping list -->
                                        <div class="cart-item">
                                            <!-- Item remove icon -->
                                            <a href="index.html#"><i class="fa fa-times"></i></a>
                                            <!-- Image -->
                                            <img class="img-responsive img-rounded" src="img/nav-menu/nav1.jpg" alt=""/>
                                            <!-- Title for purchase item -->
                                            <span class="cart-title"><a href="index.html#">Exception Reins Evocative</a></span>
                                            <!-- Cart item price -->
                                            <span class="cart-price pull-right red">$200/-</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Cart items for shopping list -->
                                        <div class="cart-item">
                                            <!-- Item remove icon -->
                                            <a href="index.html#"><i class="fa fa-times"></i></a>
                                            <!-- Image -->
                                            <img class="img-responsive img-rounded" src="img/nav-menu/nav2.jpg" alt=""/>
                                            <!-- Title for purchase item -->
                                            <span class="cart-title"><a href="index.html#">Taut Mayoress Alias Appendicitis</a></span>
                                            <!-- Cart item price -->
                                            <span class="cart-price pull-right red">$190/-</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Cart items for shopping list -->
                                        <div class="cart-item">
                                            <!-- Item remove icon -->
                                            <a href="index.html#"><i class="fa fa-times"></i></a>
                                            <!-- Image -->
                                            <img class="img-responsive img-rounded" src="img/nav-menu/nav3.jpg" alt=""/>
                                            <!-- Title for purchase item -->
                                            <span class="cart-title"><a href="index.html#">Sinter et Molests Perfectionist</a></span>
                                            <!-- Cart item price -->
                                            <span class="cart-price pull-right red">$99/-</span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Cart items for shopping list -->
                                        <div class="cart-item">
                                            <a class="btn btn-danger" data-toggle="modal"
                                               href="index.html#shoppingcart1">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <!-- Link -->
                        <a href="<?= \yii\helpers\Url::home() ?>">
                            <!-- Logo area -->
                            <div class="logo">
                                <img class="img-responsive" src="img/logo.png" alt=""/>
                                <!-- Heading -->
                                <h1>CakeFactory</h1>
                                <!-- Paragraph -->
                                <p>Facility ester expedite instinct.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-7">
                        <!-- Navigation -->
                        <nav class="navbar navbar-default navbar-right" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.html"><img src="img/nav-menu/nav1.jpg" class="img-responsive"
                                                                      alt=""/> Home</a></li>
                                        <li class="dropdown hidden-xs">
                                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><img
                                                        src="img/nav-menu/nav2.jpg" class="img-responsive" alt=""/> Menu
                                                <b class="caret"></b></a>
                                            <ul class="dropdown-menu dropdown-md">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <!-- Menu Item -->
                                                            <div class="menu-item">
                                                                <!-- Heading -->
                                                                <h3>Vegetarian</h3>
                                                                <!-- Image -->
                                                                <img src="img/dish/dish1.jpg" class="img-responsive"
                                                                     alt=""/>
                                                                <!-- Paragraph -->
                                                                <p>Sea nut perspicacity under omni piste natures mirror
                                                                    of there with consequent.</p>
                                                                <!-- Button -->
                                                                <a href="menu.html" class="btn btn-danger btn-xs">View
                                                                    Menu</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <!-- Menu Item -->
                                                            <div class="menu-item">
                                                                <!-- Heading -->
                                                                <h3>Non-Vegetarian</h3>
                                                                <!-- Image -->
                                                                <img src="img/dish/dish2.jpg" class="img-responsive"
                                                                     alt=""/>
                                                                <!-- Paragraph -->
                                                                <p>Sea nut perspicacity under omni piste natures mirror
                                                                    as precode consequent.</p>
                                                                <!-- Button -->
                                                                <a href="menu.html" class="btn btn-danger btn-xs">View
                                                                    Menu</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!-- Menu Item -->
                                                            <div class="menu-item">
                                                                <!-- Heading -->
                                                                <h3>Special Menu</h3>
                                                                <!-- Image -->
                                                                <img src="img/dish/dish3.jpg" class="img-responsive"
                                                                     alt=""/>
                                                                <!-- Paragraph -->
                                                                <p>Sea nut perspicacity under omni piste natures mirror
                                                                    consequent.</p>
                                                                <!-- Button -->
                                                                <a href="menu.html" class="btn btn-danger btn-xs">View
                                                                    Menu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown visible-xs">
                                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"> Menu
                                                <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="menu.html">Vegetarian</a></li>
                                                <li><a href="menu.html">Non Vegetarian</a></li>
                                                <li><a href="menu.html">Special Menu</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html"><img src="img/nav-menu/nav3.jpg"
                                                                        class="img-responsive" alt=""/> Gallery</a></li>
                                        <li class="dropdown">
                                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><img
                                                        src="img/nav-menu/nav4.jpg" class="img-responsive" alt=""/> Shop
                                                <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="items.html">Shopping</a></li>
                                                <li><a href="item-single.html">Order Now</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="reserve-seats.html">Reservation</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><img
                                                        src="img/nav-menu/nav5.jpg" class="img-responsive" alt=""/>
                                                Pages <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="error.html">404 Error</a></li>
                                                <li><a href="0-base.html">Blank Page</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                                <li><a href="components.html">Components</a></li>
                                                <li><a href="general.html">General</a></li>
                                                <li><a href="nutrition-info.html">Nutrition Info</a></li>
                                                <li><a href="recipe.html">Recipes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="aboutus.html"><img src="img/nav-menu/nav6.jpg"
                                                                        class="img-responsive" alt=""/> About</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div> <!-- / .container -->
        </div>


        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/slide2.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom"
                             data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl largeblackbg br-red"
                             data-x="20"
                             data-y="100"
                             data-speed="1500"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">We Make Delicious...
                        </div>
                        <!-- LAYER NR. 2.0 -->
                        <div class="tp-caption lfl medium_bg_darkblue br-green"
                             data-x="20"
                             data-y="200"
                             data-speed="1500"
                             data-start="1800"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="off">Consectetur Adipisicing
                        </div>
                        <!-- LAYER NR. 2.1 -->
                        <div class="tp-caption lfl medium_bg_darkblue br-lblue"
                             data-x="20"
                             data-y="250"
                             data-speed="1500"
                             data-start="2100"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">Sed do Seusmod
                        </div>
                        <!-- LAYER NR. 2.2 -->
                        <div class="tp-caption lfl medium_bg_darkblue br-purple"
                             data-x="20"
                             data-y="300"
                             data-speed="1500"
                             data-start="2400"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">Incididunt ut Labore
                        </div>
                        <!-- LAYER NR. 2.3 -->
                        <div class="tp-caption lfl medium_bg_darkblue br-orange"
                             data-x="20"
                             data-y="350"
                             data-speed="1500"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">Excepteur Sint
                        </div>
                        <!-- LAYER NR. 3.0 -->
                        <div class="tp-caption customin customout"
                             data-x="right" data-hoffset="-50"
                             data-y="100"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="400"
                             data-start="3600"
                             data-easing="Power3.easeInOut"
                             data-endspeed="300"
                             style="z-index: 5"><img class="slide-img img-responsive" src="img/slider/s21.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 3.1 -->
                        <div class="tp-caption customin customout"
                             data-x="right" data-hoffset="-120"
                             data-y="130"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="400"
                             data-start="3900"
                             data-easing="Power3.easeInOut"
                             data-endspeed="300"
                             style="z-index: 6"><img class="slide-img img-responsive" src="img/slider/s22.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 3.2 -->
                        <div class="tp-caption customin customout"
                             data-x="right" data-hoffset="-10"
                             data-y="160"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="400"
                             data-start="4200"
                             data-easing="Power3.easeInOut"
                             data-endspeed="300"
                             style="z-index: 7"><img class="slide-img img-responsive" src="img/slider/s23.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 3.3 -->
                        <div class="tp-caption customin customout"
                             data-x="right" data-hoffset="-80"
                             data-y="190"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="400"
                             data-start="4500"
                             data-easing="Power3.easeInOut"
                             data-endspeed="300"
                             style="z-index: 8"><img class="slide-img img-responsive" src="img/slider/s24.png" alt=""/>
                        </div>
                    </li>
                    <li data-transition="zoomin" data-slotamount="6" data-masterspeed="400">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/transparent.png" style="background-color:#fff" alt="" data-bgfit="cover"
                             data-bgposition="center bottom" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfl modern_medium_light"
                             data-x="20"
                             data-y="90"
                             data-speed="800"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">The New
                        </div>
                        <!-- LAYER NR. 1.1 -->
                        <div class="tp-caption large_bold_grey heading customin customout"
                             data-x="10"
                             data-y="125"
                             data-splitin="chars"
                             data-splitout="chars"
                             data-elementdelay="0.05"
                             data-start="1500"
                             data-speed="900"
                             data-easing="Back.easeOut"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-endspeed="500"
                             data-endeasing="Power3.easeInOut"
                             data-captionhidden="on"
                             style="z-index:5">CakeFactory
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin customout"
                             data-x="right"
                             data-y="100"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3"><img class="img-responsive" src="img/slider/s11.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 2.1 -->
                        <div class="tp-caption customin customout"
                             data-x="right"
                             data-y="100"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800"
                             data-start="2300"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3"><img class="img-responsive" src="img/slider/s12.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 2.2 -->
                        <div class="tp-caption customin customout"
                             data-x="right"
                             data-y="100"
                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="800"
                             data-start="2600"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3"><img class="img-responsive" src="img/slider/s13.png" alt=""/>
                        </div>
                        <!-- LAYER NR. 2.3 -->
                        <div class="tp-caption sft"
                             data-x="right" data-hoffset="-400"
                             data-y="80"
                             data-speed="1000"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 10"><span class="price-tag br-white">30%<br/>Off</span>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption finewide_verysmall_white_mw paragraph customin customout tp-resizeme"
                             data-x="20"
                             data-y="210"
                             data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3600"
                             data-easing="Power3.easeInOut"
                             data-splitin="lines"
                             data-splitout="lines"
                             data-elementdelay="0.2"
                             data-endelementdelay="0.08"
                             data-endspeed="300"
                             style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum
                            dolor sit amet, consetetur<br/> sadipscing elitr, sed diam nonumy<br/> eirmod tempor
                            invidunt ut labore et<br/> dolore magna aliquyam erat, sed diam <br/> voluptua. At vero eos
                            et accusam.
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfb"
                             data-x="20"
                             data-y="335"
                             data-speed="800"
                             data-start="4500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 11"><a class="btn btn-danger" href="index.html#">Download</a> <a
                                    class="btn btn-success hidden-xs" href="index.html#">Purchase Now</a>
                        </div>
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="600">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/transparent.png" style="background-color:#fea501" alt="" data-bgfit="cover"
                             data-bgposition="center bottom" data-bgrepeat="no-repeat">
                        <!-- LAYERS NR. 1 -->
                        <div class="tp-caption lfl"
                             data-x="left"
                             data-y="100"
                             data-speed="800"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Linear.easeNone"
                             data-captionhidden="off"><img class="img-responsive" src="img/slider/s35.png" alt=""/>
                        </div>
                        <!-- LAYERS NR. 2 -->
                        <div class="tp-caption lfr large_bold_grey heading white"
                             data-x="right" data-hoffset="-10"
                             data-y="120"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Linear.easeNone"
                             data-captionhidden="off">Tasty Yammi
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption whitedivider3px customin customout tp-resizeme"
                             data-x="right" data-hoffset="-20"
                             data-y="210" data-voffset="0"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="700"
                             data-start="2300"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
                             data-x="right" data-hoffset="-10"
                             data-y="245" data-voffset="0"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2700"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="chars"
                             data-elementdelay="0.08"
                             data-endelementdelay="0.08"
                             data-endspeed="500"
                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">Hamburger
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption finewide_verysmall_white_mw white customin customout tp-resizeme text-right paragraph"
                             data-x="right" data-hoffset="-10"
                             data-y="300"
                             data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3500"
                             data-easing="Power3.easeInOut"
                             data-splitin="lines"
                             data-splitout="lines"
                             data-elementdelay="0.2"
                             data-endelementdelay="0.08"
                             data-endspeed="300"
                             style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum
                            dolor sit amet, consetetur sadipscing elitr,<br/> nonumy voluptu ansetetur sadipscing elit.
                            <br/> sed diam quisquam est nonumy voluptu vero eos et.
                        </div>
                    </li>
                    <li data-transition="cube" data-slotamount="7" data-masterspeed="600">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/slide2.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom"
                             data-bgrepeat="no-repeat">
                        <!-- LAYERS NR. 1 -->
                        <div class="tp-caption lfl"
                             data-x="110"
                             data-y="130"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="off"><img src="img/slider/s31.png" class="img-responsive" alt=""/>
                        </div>
                        <!-- LAYERS NR. 2 -->
                        <div class="tp-caption lfl"
                             data-x="80"
                             data-y="265"
                             data-speed="800"
                             data-start="2200"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="off"><img src="img/slider/s33.png" class="img-responsive" alt=""/>
                        </div>
                        <!-- LAYERS NR. 3 -->
                        <div class="tp-caption lfl"
                             data-x="450"
                             data-y="312"
                             data-speed="800"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="off"><img src="img/slider/s34.png" class="img-responsive" alt=""/>
                        </div>
                        <!-- LAYERS NR. 4 -->
                        <div class="tp-caption sfr  thinheadline_dark white"
                             data-x="right" data-hoffset="-10"
                             data-y="90"
                             data-speed="800"
                             data-start="3200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 3">Online
                        </div>
                        <!-- LAYERS NR. 4.1 -->
                        <div class="tp-caption lfr largepinkbg br-green"
                             data-x="right" data-hoffset="-10"
                             data-y="135"
                             data-speed="800"
                             data-start="3500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Linear.easeNone"
                             data-captionhidden="off">Seats Reserve
                        </div>
                        <!-- LAYERS NR. 5 -->
                        <div class="tp-caption skewfromright medium_text text-right paragraph"
                             data-x="right" data-hoffset="-10"
                             data-y="225"
                             data-speed="800"
                             data-start="3800"
                             data-easing="Power4.easeOut"
                             data-endspeed="400"
                             data-endeasing="Power4.easeOut"
                             data-captionhidden="off">At vero eos etntium accu amet, adipisicing samus iusto<br/>praese
                            delen itieos etconsectetur atque corrupti<br/>praese etntiumder delen itierrupti.
                        </div>
                        <!-- LAYERS NR. 6 // -->
                        <div class="tp-caption lfr modern_big_redbg br-red"
                             data-x="right"
                             data-hoffset="-10"
                             data-y="315"
                             data-speed="1500"
                             data-start="4100"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Linear.easeNone"
                             data-captionhidden="off">Desktop or Laptop
                        </div>
                        <!-- LAYERS NR. 6.1 // -->
                        <div class="tp-caption lfr modern_big_redbg br-yellow"
                             data-x="right"
                             data-hoffset="-10"
                             data-y="375"
                             data-speed="1500"
                             data-start="4400"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Linear.easeNone"
                             data-captionhidden="off">Tablet or Phone
                        </div>
                    </li>
                </ul>
                <!-- Banner Timer -->
                <div class="tp-bannertimer"></div>
            </div>
        </div>

        <?= $content ?>

        <div class="footer padd">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Footer widget -->
                        <div class="footer-widget">
                            <!-- Logo area -->
                            <div class="logo">
                                <img class="img-responsive" src="img/logo.png" alt=""/>
                                <!-- Heading -->
                                <h1>CakeFactory</h1>
                            </div>
                            <!-- Paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et magna aliqua.</p>
                            <hr/>
                            <!-- Heading -->
                            <h6>On-line Payment Clients</h6>
                            <!-- Images -->
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/2co.gif" alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/authorizenet.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/discover.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/egold.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/mastercard.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/paypal.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/visa.gif"
                                                       alt=""/></a>
                            <a href="index.html#"><img class="payment img-responsive" src="img/payment/worldpay.gif"
                                                       alt=""/></a>
                        </div> <!--/ Footer widget end -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Footer widget -->
                        <div class="footer-widget">
                            <!-- Heading -->
                            <h4>Famous Dishes</h4>
                            <!-- Images -->
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                            <a href="index.html#"><img class="dish img-responsive" src="img/dish/dish1.jpg" alt=""/></a>
                        </div> <!--/ Footer widget end -->
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Footer widget -->
                        <div class="footer-widget">
                            <!-- Heading -->
                            <h4>Join Us Today</h4>
                            <!-- Paragraph -->
                            <p>There is no one who loves pain itself, who seeks after it and wants to have it.</p>
                            <!-- Subscribe form -->
                            <form role="form">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your name"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your email"/>
                                </div>
                                <button class="btn btn-danger" type="button">Subscribe</button>
                            </form>
                        </div> <!--/ Footer widget end -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Footer widget -->
                        <div class="footer-widget">
                            <!-- Heading -->
                            <h4>Contact Us</h4>
                            <div class="contact-details">
                                <!-- Address / Icon -->
                                <i class="fa fa-map-marker br-red"></i> <span>#768, 5th floor, N S Building,<br/>Csm Block, Park Road,<br/> Bangalore - 234567</span>
                                <div class="clearfix"></div>
                                <!-- Contact Number / Icon -->
                                <i class="fa fa-phone br-green"></i> <span>+91 88-88-888888</span>
                                <div class="clearfix"></div>
                                <!-- Email / Icon -->
                                <i class="fa fa-envelope-o br-lblue"></i> <span><a
                                            href="index.html#">abc@example.com</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Social media icon -->
                            <div class="social">
                                <a href="index.html#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="index.html#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="index.html#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="index.html#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div> <!--/ Footer widget end -->
                    </div>
                </div>
                <!-- Copyright -->
                <div class="footer-copyright">
                    <!-- Paragraph -->
                    <p>&copy; Copyright 2014 <a href="index.html#">Company Name</a></p>
                </div>
            </div>
        </div>

        <!-- Footer End -->

    </div><!-- / Wrapper End -->
    <!-- Scroll to top -->
    <span class="totop"><a href="index.html#"><i class="fa fa-angle-up"></i></a></span>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>