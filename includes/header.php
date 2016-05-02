<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eShop Nepal">
    <meta name="author" content="Biplov Koirala">
    <meta name="keywords" content="">

    <title>eShop Nepal</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <script src="assets/js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
    _________________________________________________________ -->
    <div id="top">
        <div class="container">
            
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <?php if (!isset($_SESSION['id'])): ?>
                    <li><a href="index.php?action=userlogin">Login</a>
                    </li>
                    <li><a href="index.php?action=register">Register</a>
                    </li>
                    <li><a href="index.php?action=contact">Contact</a>
                    </li>
                    <li><a href="index.php?action=faq">FAQ</a>
                    </li>
                    <?php else: ?>
                    <li><a href="index.php?action=userpanel"></i>Welcome, <?=$_SESSION['first_name'];?></a>
                                        <li><a href="index.php?action=cart">Basket</a></li>
                    <li><a href="index.php?action=logout">Logout</a></li><?php endif;?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                       <form id="login" action="index.php?action=login_controller" method="post" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-modal" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="index.php?action=register"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
    _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="assets/img/logo.png" alt="eshop logo" class="hidden-xs">
                    <img src="assets/img/logo-small.png" alt="eshop logo" class="visible-xs"><span class="sr-only">eShop - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="index.php?action=cart">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class=""><a href="index.php?action=home">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Laptops <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Brands</h5>
                                            <ul>
                                                <li><a href="index.php?action=apple">Apple</a>
                                                </li>
                                                <li><a href="index.php?action=dell">Dell</a>
                                                </li>
                                                <li><a href="index.php?action=hp">HP</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Top Sellers</h5>
                                            <ul>
                                                <li>Dell
                                                </li>
                                                <li>HP
                                                </li>
                                                <li>Acer
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Trending Laptops</h5>
                                            <ul>
                                                <li>Macbook Air
                                                </li>
                                                <li>HP Envy M6</a>
                                                </li>
                                                <li>Acer Aspire
                                                </li>
                                                <li>Lenovo Thinkpad
                                                </li>
                                                <li>Samsung ATIV Book
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Mobiles <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>Brands</h5>
                                                <ul>
                                                    <li><a href="index.php?action=apple">Apple</a>
                                                    </li>
                                                    <li><a href="index.php?action=samsung">Samsung</a>
                                                    </li>
                                                    <li><a href="index.php?action=lg">LG</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Top Seller</h5>
                                                <ul>
                                                    <li>Samsung
                                                    </li>
                                                    <li>Apple
                                                    </li>
                                                    <li>Huawei
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Trending Mobiles</h5>
                                                <ul>
                                                    <li>Galaxy S7 | S7 edge
                                                    </li>
                                                    <li>iPhone 6s | 6S Plus
                                                    </li>
                                                    <li>LG G4
                                                    </li>
                                                </ul>                                              
                                                </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Tablets <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Brands</h5>
                                                        <ul>
                                                            <li><a href="index.php?action=apple">Apple</a>
                                                            </li>
                                                            <li><a href="index.php?action=samsung">Samsung</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Top Sellers</h5>
                                                        <ul>
                                                            <li>Apple
                                                            </li>
                                                            <li>Samsung
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Trending Tablets</h5>
                                                        <ul>
                                                            <li>Apple iPad Pro
                                                            </li>
                                                            <li>Galaxy Tab Pro
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                <!-- /.yamm-content -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                            <!--/.nav-collapse -->

                            <div class="navbar-buttons">

                                <div class="navbar-collapse collapse right" id="basket-overview">
                                    <a href="index.php?action=cart" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">View Cart</span></a>
                                </div>
                                <!--/.nav-collapse -->

                                <div class="navbar-collapse collapse right" id="search-not-mobile">
                                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                                        <span class="sr-only">Toggle search</span>
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>

                            </div>

                            <div class="collapse clearfix" id="search">
                                <div class="row">
                                    <div class="col-md-5 pull-right">
                                <form class="navbar-form navbar-right"  action="product_search.php" method="get" role="search">
                                        <div class="form-group">
                                          <input id="search-box" name="text_supplied" type="text" style="width: 300px;" maxlength="25" class="form-control" placeholder="How Can I Help You??">
                                          <div id="suggesstion-box"></div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                      </form>
                                  </div>
                             </div>
                     </div>
                 </div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $("#search-box").keyup(function(){
        $.ajax({
        type: "POST",
        url: "includes/readProduct.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
            $("#suggesstion-box").show();
            $("#suggesstion-box").html(data);
            $("#search-box").css("background","#FFF");
        }
        });
    });
});

function selectProduct(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

<style>
#product-list{float:left;list-style:none;margin:0;padding:0;width:190px;}
#product-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#product-list li:hover{background:#F0F0F0;}
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
</style>