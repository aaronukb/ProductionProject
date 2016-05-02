<?php include ("files/contact_controller.php");
// include("classes/User.php");
?>
<?php echo $success;?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="box" id="message">
                        <h1>Contact</h1>
                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p><strong>eShop Nepal Pvt. Ltd.</strong>
                            <br>Gauri Marga,
                            <br>Shantinagar,Kathmandu,
                           <br><strong>Nepal</strong>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">Give us a call if you have any queries or feel free to mail us any time.</p>
                                <p><strong>977-9842141434</strong>
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                <ul>
                                    <li><strong><a href="mailto:">koiralabiplov@gmail.com</a></strong>
                                    </li>
                                     </ul>
                            </div>
                        </div>
                        <hr>
                        <div id="map">
                        </div>
                        <hr>
                        <h2>Contact form</h2>
                            <form id="message" method="post" action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <div class="erno"><?php echo $firstnameerror; ?></br></div>
                                        <input type="text" name="firstname" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <div class="erno"><?php echo $lastnameerror; ?></br></div>
                                        <input type="text" name="lastname" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="erno"><?php echo $emailerror; ?></br></div>
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <div class="erno"><?php echo $subjecterror; ?></br></div>
                                        <input type="text" name="subject" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <div class="erno"><?php echo $subjecterror; ?></br></div>
                                        <textarea id="message" name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" name="contact" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>     

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 18,
                center: new google.maps.LatLng(27.689328, 85.347782),
                mapTypeId: google.maps.MapTypeId.ROAD,
                scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var myLatLng = new google.maps.LatLng(27.689328, 85.347782);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
