<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">
             <div class="col-md-3 col-sm-6">
                <h4>User section</h4>
                    <?php if (!isset($_SESSION['id'])): ?>
                            <ul>
                            <li><a href="index.php?action=userlogin">Login</a>
                            </li>
                            <li><a href="index.php?action=register">Register</a>
                            </li>
                        </ul>
                            <?php else: ?>  
                        <hr class="hidden-md hidden-lg hidden-sm">
                        <a href="index.php?action=contact">Go to contact page</a>
                        <?php endif;?>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Where to find us</h4>
                        <p><strong>eShop Nepal Pvt. Ltd.</strong>
                            <br>Gauri Marga, Shantinagar,
                            <br>Kathmandu, Nepal
                            <br>                           
                        </p>                       
                    </div>
                        <h4>Stay in touch</h4>
                        <p class="social">
                            <a href="https://www.facebook.com/beep.love7" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/KoiralaBiplov" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/biplovkoirala/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="https://plus.google.com/u/0/103523669261779075863/posts" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                        </p>
                    </div>               
                </div>             
            </div>
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">Copyright © 2016 Biplov Koirala.</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Designed & Developd by Biplov Koirala for eShop Nepal</a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
     <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/front.js"></script>
</body>
</html>